@extends('layouts.layout')

@section('content')

    <main>
        <div class="container">
            <div class="create">
                <div class="create__head">
                    <div class="create__title"><img src="{{ asset('fonts/icons/main/New_Topic.svg') }}" alt="New topic">Create New Thread</div>
                </div>
                <form action="{{ route('threads.store') }}" method="POST">
                    @CSRF
                    <div class="create__section">
                        <label class="create__label" for="title">Thread Title</label>
                        <input type="text" class="form-control" id="title" placeholder="Add here" name="title" value="{{ old('title') }}">
                        @error('title')
                            <div class="alert alert-danger" style="margin-top:20px;">{{ $message }}</div>
                        @enderror
                    </div>
                    <div class="row">
                        <div class="col-md-6">
                            <div class="create__section">
                                <label class="create__label" for="category">Select Category</label>
                                <label class="custom-select">
                                    <select name="category_id">
                                        <option>Select Category</option>
                                        @foreach($categories as $category)
                                            <option value={{ $category->id }}>{{ $category->name }}</option>
                                        @endforeach
                                    </select>
                                    @error('category_id')
                                        <div class="alert alert-danger" style="margin-top:20px;">{{ $message }}</div>
                                    @enderror
                                </label>
                            </div>
                        </div>
                    </div>
                    <div class="create__section create__textarea">
                        <label class="create__label" for="description">Description</label>
                        <textarea class="form-control" id="description" name="body">{{ old('body') }}</textarea>
                        @error('body')
                            <div class="alert alert-danger" style="margin-top:20px;">{{ $message }}</div>
                        @enderror
                    </div>
                    <div class="create__advanced">
                        <div class="row">
                            <div class="col-lg-4 col-xl-4">
                                <div class="create__section">
                                    <label class="create__label">Who can see this?</label>
                                    <div class="create__radio">
                                        <label class="create__box">
                                            <label class="custom-radio">
                                                <input type="radio" name="can-see" checked="checked">
                                                <i></i>
                                            </label>
                                            <span>Everyone</span>
                                        </label>
                                        <label class="create__box">
                                            <label class="custom-radio">
                                                <input type="radio" name="can-see">
                                                <i></i>
                                            </label>
                                            <span>Only Friends</span>
                                        </label>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="create__footer">
                        <a href="{{ route('threads.index') }}" class="create__btn-cansel btn">Cancel</a>
                        <button class="create__btn-create btn btn--type-02">Create Thread</button>
                    </div>
                </form>
            </div>
        </div>
    </main>

@endsection