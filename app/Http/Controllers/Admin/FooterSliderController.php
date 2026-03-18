<?php

namespace App\Http\Controllers\Admin;

use App\Contracts\SliderContract;
use App\Http\Controllers\BaseController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Cache;

class FooterSliderController extends BaseController
{
    protected $sliderRepository;

    public function __construct(SliderContract $sliderContract)
    {
        $this->sliderRepository = $sliderContract;
    }

    public function index(){
        $sliders = $this->sliderRepository->listFooterSlider('id','desc',['*'],10);
        $this->setPageTitle('Footer Slider','List of all Footer Sliders');
        return view('admin.home-footer-slider.index',compact('sliders'));
    }

    public function create(){
        $this->setPageTitle('Footer Sliders','Create New Footer Slider');
        return view('admin.home-footer-slider.create');
    }

    public function store(Request $request){
        $this->validate($request,[
            'name' => 'required|max:191',
            'image'     => 'mimes:jpg,jpeg,png,webp|max:5000'
        ]);

        $params = $request->except('_token');

        $sliders = $this->sliderRepository->createSlider($params);

        if(!$sliders){
            return $this->responseRedirectBack('Error occurred while creating footer slider','error',true,true);
        }
        $this->removeCache();
        return $this->responseRedirect('admin.home-sliders.index','Footer Slider Added Successfully','success',false,false);

    }

    public function edit($id)
    {
        $slider = $this->sliderRepository->findSliderById($id);
        $this->setPageTitle('Footer Sliders','Edit Footer Slider : '.$slider->name);
        return view('admin.home-footer-slider.edit',compact('slider'));
    }

    public function update(Request $request){

        $this->validate($request,[
            'name' => 'required|max:191',
            'image'     => 'mimes:jpg,jpeg,png,webp|max:5000'
        ]);

        $params = $request->except('_token');
        $slider = $this->sliderRepository->updateSlider($params);

        if(!$slider){
            return $this->responseRedirectBack('Error occurred while updating footer slider','error',true,true);
        }
        $this->removeCache();
        return $this->responseRedirectBack('Footer Slider updated successfully','success',false,false);
    }

    public function delete($id){
        $slider = $this->sliderRepository->deleteSlider($id);
        if(!$slider){
            return $this->responseRedirectBack('Error occurred while deleting footer slider','error',true,true);
        }
        $this->removeCache();
        return $this->responseRedirect('admin.home-footer-slider.index','Footer Slider deleted Successfully','success',false,false);
    }

    protected function removeCache(){
        Cache::forget('active_footer_slider');
    }

}
