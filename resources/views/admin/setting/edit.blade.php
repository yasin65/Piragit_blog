@extends('layouts.dash')
@section('admin_content')


                    <form action="{{ route('setting.update') }}" method="POST" enctype="multipart/form-data">
                        @csrf 
                        @include('includes.errors')
                        <div class="form-group">
                            <label for="name">Site Name</label>
                            <input type="name" name="name" value="{{ $setting->name }}" class="form-control" placeholder="Enter name">
                        </div>
                        <div class="row">
                            <div class="col-6">
                                <div class="form-group">
                                    <label for="facebook">Facebook</label>
                                    <input type="facebook" name="facebook" value="{{ $setting->facebook }}" class="form-control" placeholder="facebook url">
                                </div>
                            </div>
                            <div class="col-6">
                                <div class="form-group">
                                    <label for="twitter">Twitter</label>
                                    <input type="twitter" name="twitter" value="{{ $setting->twitter }}" class="form-control" placeholder="twitter url">
                                </div>
                            </div>
                            <div class="col-6">
                                <div class="form-group">
                                    <label for="instagram">Instagram</label>
                                    <input type="instagram" name="instagram" value="{{ $setting->instagram }}" class="form-control" placeholder="instagram url">
                                </div>
                            </div>
                            <div class="col-6">
                                <div class="form-group">
                                    <label for="reddit">Reddit</label>
                                    <input type="reddit" name="reddit" value="{{ $setting->reddit }}" class="form-control" placeholder="reddit url">
                                </div>
                            </div>
                            <div class="col-6">
                                <div class="form-group">
                                    <label for="email">Email</label>
                                    <input type="email" name="email" value="{{ $setting->email }}" class="form-control" placeholder="email url">
                                </div>
                            </div>
                            <div class="col-6">
                                <div class="form-group">
                                    <label for="copyright">Copyright</label>
                                    <input type="copyright" name="copyright" value="{{ $setting->copyright }}" class="form-control" placeholder="copyright">
                                </div>
                            </div>
                            <div class="col-6">
                                <div class="form-group">
                                    <label for="email">Contact Phone Number</label>
                                    <input type="text" name="phone" value="{{ $setting->phone }}" class="form-control" placeholder="phone number">
                                </div>
                            </div>
                            <div class="col-6">
                                <div class="form-group">
                                    <label for="address">Location</label>
                                    <textarea name="address" id="address" class="form-control" rows="1" placeholder="enter address">{{ $setting->address}}</textarea>
                                </div>
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="row">
                                <div class="col-8">
                                    <label for="logo">Site Logo</label>
                                    <div class="custom-file">
                                        <input type="file" name="site_logo" class="custom-file-input" id="logo">
                                        <label class="custom-file-label" for="logo">Choose file</label>
                                    </div>
                                </div>
                                <div class="col-4 text-right">
                                    <div style="max-width: 100px; max-height: 100px;overflow:hidden; margin-left: auto">
                                        <img src="{{ asset($setting->site_logo) }}" class="img-fluid" alt="">
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="description">Site Description</label>
                            <textarea name="description" id="description" rows="3" class="form-control" placeholder="Enter description">{{ $setting->description }}</textarea>
                        </div>
                        <div class="form-group">
                            <button type="submit" class="btn btn-lg btn-primary">Update Post</button>
                        </div>
                    </form>
                                
@endsection