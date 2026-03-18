<div>
    <title>{{ $pageTitle  .' | '.$pageSubTitle }}</title>
    @if(isset($imageLink))
    <meta property="og:image" content="{{ $imageLink }}">
    @endif
    <meta name="description" content="{{ isset($metaDescription) ? $metaDescription : '' }}" />
    <meta name="keywords" content="{{ isset($metaTitle) ? $metaTitle : '' }}" />
    <meta name="tag" content="{{ isset($metaTags) ? $metaTags : '' }}" />
    <meta name="csrf-token" content="{{ csrf_token() }}">
</div>
