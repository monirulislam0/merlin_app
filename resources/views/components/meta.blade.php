<title>{{$pageSubTitle }}</title>
@if(isset($imageLink))
<meta property="og:image" content="{{ $imageLink }}">
@endif
<meta name="description" content="{{ isset($metaDescription) ? strip_tags($metaDescription) : '' }}" />
<meta name="keywords" content="{{ isset($metaTitle) ? strip_tags($metaTitle) : '' }}" />
<meta name="tag" content="{{ isset($metaTags) ? strip_tags($metaTags) : '' }}" />
<meta name="csrf-token" content="{{ csrf_token() }}">
