<?php

namespace App\Http\Controllers\Admin;

use App\Contracts\ServicePageContract;
use App\Http\Controllers\BaseController;
use App\Http\Requests\ServicePageUpdateRequest;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Cache;

class ServicePageController extends BaseController
{
    protected $servicePageRepository;

    public function __construct(ServicePageContract $servicePageContract)
    {
        $this->servicePageRepository = $servicePageContract;
    }

    /**
     * Show the form for editing the service page.
     */
    public function edit()
    {
        $servicePage = $this->servicePageRepository->findServicePageByShortCode('service_page_content');
        
        if (!$servicePage) {
            // Create default record if it doesn't exist
            $servicePage = $this->servicePageRepository->createServicePage([
                'page_title' => 'Service Page',
                'short_code' => 'service_page_content',
                'content' => '<h2>Our Services</h2><p>We provide excellent services to our clients.</p>',
            ]);
        }

        $this->setPageTitle('Service Page', 'Edit: ' . $servicePage->page_title);
        return view('admin.service-pages.edit', compact('servicePage'));
    }

    /**
     * Update the service page.
     */
    public function update(ServicePageUpdateRequest $request)
    {
        $params = $request->except('_token');
        
        // Get the service page record
        $servicePage = $this->servicePageRepository->findServicePageByShortCode('service_page_content');
        
        if (!$servicePage) {
            return $this->responseRedirectBack('Service page not found.', 'error', true, true);
        }

        // Handle image upload if present
        if (isset($params['image']) && $params['image'] instanceof \Illuminate\Http\UploadedFile) {
            $image = $this->uploadImage($params['image'], 'service-pages');
            $params['image'] = $image;
        }

        $servicePage = $this->servicePageRepository->updateServicePage($params, $servicePage->id);

        if (!$servicePage) {
            return $this->responseRedirectBack('Error occurred while updating service page.', 'error', true, true);
        }

        // Clear cache
        Cache::forget('service_page_content');

        return $this->responseRedirectBack('Service page updated successfully.', 'success', false, false);
    }

    /**
     * Upload image
     */
    private function uploadImage($image, $folder)
    {
        $imageName = time() . '_' . uniqid() . '.' . $image->getClientOriginalExtension();
        $image->move(public_path('storage/' . $folder), $imageName);
        return $folder . '/' . $imageName;
    }
}
