@extends('dashboard.index')

@section('content')
<body class="app">
    <div class="app-wrapper">
        <div class="app-content pt-3 p-md-3 p-lg-4">
            <div class="container-xl">
                <div class="row g-3 mb-4 align-items-center justify-content-between">
                    <div class="col-auto">
                        <h1 class="app-page-title mb-0">My Docs</h1>
                    </div>
                </div>
                <div class="row g-4">
                    @foreach($documents as $document)
                        <div class="col-6 col-md-4 col-xl-3 col-xxl-2">
                            <div class="app-card app-card-doc shadow-sm h-100">
                                <div class="app-card-thumb-holder p-3">
                                    @if($document->type == 'Text')
                                        <span class="icon-holder">
                                            <i class="fas fa-file-alt text-file"></i>
                                        </span>
                                    @elseif($document->type == 'Image')
                                        <div class="app-card-thumb">
                                            <img class="thumb-image" src="{{ $document->file_link }}" alt="">
                                        </div>
                                    @elseif($document->type == 'PDF')
                                        <span class="icon-holder">
                                            <i class="fas fa-file-pdf pdf-file"></i>
                                        </span>
                                    @elseif($document->type == 'Spreadsheet')
                                        <span class="icon-holder">
                                            <i class="fas fa-file-excel excel-file"></i>
                                        </span>
                                    @elseif($document->type == 'Video')
                                        <span class="icon-holder">
                                            <i class="fas fa-file-video video-file"></i>
                                        </span>
                                    @elseif($document->type == 'Zip')
                                        <span class="icon-holder">
                                            <i class="fas fa-file-archive zip-file"></i>
                                        </span>
                                    @elseif($document->type == 'PPT')
                                        <span class="icon-holder">
                                            <i class="fas fa-file-powerpoint ppt-file"></i>
                                        </span>
                                    @endif
                                    <a class="app-card-link-mask" href="{{ $document->file_link }}"></a>
                                </div>
                                <div class="app-card-body p-3 has-card-actions">
                                    <h4 class="app-doc-title truncate mb-0"><a href="{{ $document->file_link }}">{{ $document->title }}</a></h4>
                                    <div class="app-doc-meta">
                                        <ul class="list-unstyled mb-0">
                                            <li><span class="text-muted">Type:</span> {{ $document->type }}</li>
                                            <li><span class="text-muted">Size:</span> {{ $document->size }}KB</li>
                                            <li><span class="text-muted">Uploaded:</span> {{ $document->created_at->diffForHumans() }}</li>
                                        </ul>
                                    </div>
                                    <div class="app-card-actions">
                                        <div class="dropdown">
                                            <div class="dropdown-toggle no-toggle-arrow" data-bs-toggle="dropdown" aria-expanded="false">
                                                <svg width="1em" height="1em" viewBox="0 0 16 16" class="bi bi-three-dots-vertical" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                                                    <path fill-rule="evenodd" d="M9.5 13a1.5 1.5 0 1 1-3 0 1.5 1.5 0 0 1 3 0zm0-5a1.5 1.5 0 1 1-3 0 1.5 1.5 0 0 1 3 0zm0-5a1.5 1.5 0 1 1-3 0 1.5 1.5 0 0 1 3 0z"/>
                                                </svg>
                                            </div>
                                            <ul class="dropdown-menu">
                                                <li><a class="dropdown-item" href="#"><svg width="1em" height="1em" viewBox="0 0 16 16" class="bi bi-eye me-2" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                                                    <path fill-rule="evenodd" d="M16 8s-3-5.5-8-5.5S0 8 0 8s3 5.5 8 5.5S16 8 16 8zM1.173 8a13.134 13.134 0 0 0 1.66 2.043C4.12 11.332 5.88 12.5 8 12.5c2.12 0 3.879-1.168 5.168-2.457A13.134 13.134 0 0 0 14.828 8a13.133 13.133 0 0 0-1.66-2.043C11.879 4.668 10.119 3.5 8 3.5c-2.12 0-3.879 1.168-5.168 2.457A13.133 13.133 0 0 0 1.172 8z"/>
                                                    <path fill-rule="evenodd" d="M8 5.5a2.5 2.5 0 1 0 0 5 2.5 2.5 0 0 0 0-5z"/>
                                                </svg>View</a></li>
                                                <li><a class="dropdown-item" href="#"><svg width="1em" height="1em" viewBox="0 0 16 16" class="bi bi-download me-2" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                                                    <path fill-rule="evenodd" d="M.5 9.9a.5.5 0 0 1 .5.5v2.5a1 1 0 0 0 1 1h12a1 1 0 0 0 1-1v-2.5a.5.5 0 0 1 1 0v2.5a2 2 0 0 1-2 2H2a2 2 0 0 1-2-2v-2.5a.5.5 0 0 1 .5-.5z"/>
                                                    <path fill-rule="evenodd" d="M7.646 1.146a.5.5 0 0 1 .708 0l3 3a.5.5 0 0 1-.708.708```blade
L8.5 2.707V11.5a.5.5 0 0 1-1 0V2.707L5.354 4.854a.5.5 0 1 1-.708-.708l3-3z"/>
                                                </svg>Download</a></li>
                                                <li><a class="dropdown-item" href="#"><svg width="1em" height="1em" viewBox="0 0 16 16" class="bi bi-trash me-2" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                                                    <path fill-rule="evenodd" d="M5.5 5.5V5a1 1 0 0 1 1-1h3a1 1 0 0 1 1 1v.5H5.5zM4.118 4a1 1 0 0 0-.995.9L3 5v.5h10V5a1 1 0 0 0-.883-.993L12 4H4.118zM4.5 7.5A.5.5 0 0 0 4 8v5.5A2.5 2.5 0 0 0 6.5 16h3a2.5 2.5 0 0 0 2.5-2.5V8a.5.5 0 0 0-.5-.5h-7zm8.5.5v5.5A3.5 3.5 0 0 1 9.5 17h-3A3.5 3.5 0 0 1 3 14.5V8H2.5a1.5 1.5 0 0 0-1.5 1.5V13a2 2 0 0 0 2 2H3v.5a3.5 3.5 0 0 0 3.5 3.5h3a3.5 3.5 0 0 0 3.5-3.5V15h.5a2 2 0 0 0 2-2v-3.5A1.5 1.5 0 0 0 15.5 8H15V8z"/>
                                                </svg>Delete</a></li>
                                            </ul>
                                        </div><!--//dropdown-->
                                    </div><!--//app-card-actions-->
                                </div><!--//app-card-body-->
                            </div><!--//app-card-->
                        </div><!--//col-->
                    @endforeach
                </div><!--//row-->
            </div><!--//container-xl-->
        </div><!--//app-content-->
    </div><!--//app-wrapper-->
</body>
@endsection
