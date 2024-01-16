@extends('dashboard.main')
@section('section')
    <div class="py-3">
        <div class="card">
            <div class="card-header">
                <span>Create/Edit FAQ item</span>
            </div>
            <div class="card-body">
                <form method="post">
                    @csrf
                    <div class="py-2">
                        <label class="text-secondary">title</label>
                        <input class="form-control input-sm" name="title" value="{{ old('title', $item->title??'') }}" required>
                    </div>
                    <div class="py-2">
                        <label class="text-secondary">content</label>
                        <textarea class="tinymce-editor form-control" name="content" placeholder="Enter content">{{ old('content', $item->content??'') }}</textarea>
                    </div>
                    <div class="d-flex justify-content-end py-2">
                        <button class="btn btn-outline-success" typ="submit">save</button>
                    </div>
                </form>
            </div>
            <div class="card-footer">
                <span class="text-center h5 fw-semibold py-2 text-dark d-block">FAQs</span>
                <!-- Default Accordion -->
                <div class="accordion" id="accordionFaqs">
                    @foreach ($data as $faq)
                        <div class="accordion-item">
                            <h2 class="accordion-header" id="xheading{{ $faq->id }}">
                                <button class="accordion-button fs-4" type="button" data-bs-toggle="collapse" data-bs-target="#xcollapse{{ $faq->id }}" aria-expanded="true" aria-controls="xcollapse{{ $faq->id }}">
                                    {{ $faq->title }}
                                </button>
                            </h2>
                            <div id="xcollapse{{ $faq->id }}" class="accordion-collapse collapse" aria-labelledby="xheading{{ $faq->id }}" data-bs-parent="#accordionFaqs">
                                <div class="accordion-body">
                                    {!! $faq->content !!}
                                </div>
                            </div>
                            <div class="accordion-footer d-flex justify-content-end py-2">
                                <a class="btn btn-sm btn-outline-primary" href="{{ route('rest.faqs', $faq->id) }}">edit</a>
                                <form method="post" action="{{ route('rest.faqs.delete', $faq->id) }}">@csrf <button type="submit" class="btn btn-sm btn-outline-warning">delete</button></form>
                            </div>
                        </div>
                    @endforeach
                </div><!-- End Default Accordion Example -->
            </div>
        </div>
    </div>
@endsection