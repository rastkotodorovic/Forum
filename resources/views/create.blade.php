@extends('layouts.layout')

@section('content')

    <main>
        <div class="container">
            <div class="create">
                <div class="create__head">
                    <div class="create__title"><img src="fonts/icons/main/New_Topic.svg" alt="New topic">Create New Thread</div>
                </div>
                <div class="create__section">
                    <label class="create__label" for="title">Thread Title</label>
                    <input type="text" class="form-control" id="title" placeholder="Add here">
                </div>
                <div class="row">
                    <div class="col-md-6">
                        <div class="create__section">
                            <label class="create__label" for="category">Select Category</label>
                            <label class="custom-select">
                                <select id="category">
                                    <option>Choose</option>
                                    <option>Choose #2</option>
                                    <option>Choose #3</option>
                                </select>
                            </label>
                        </div>
                    </div>
                </div>
                <div class="create__section create__textarea">
                    <label class="create__label" for="description">Description</label>
                    <textarea class="form-control" id="description"></textarea>
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
                    <a href="#" class="create__btn-cansel btn">Cancel</a>
                    <a href="#" class="create__btn-create btn btn--type-02">Create Thread</a>
                </div>
            </div>
        </div>
    </main>

@endsection