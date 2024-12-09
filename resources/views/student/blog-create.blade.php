<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight" style="color: white;">
            {{ __('Create an Event') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg">
                <div class="card mb-4">
                    <div class="card-body">
                        @if (session('success'))
                            <div class="alert alert-success">
                                {{ session('success') }}
                            </div>
                        @endif

                        <style>
                            /* Add some basic styling to make it look nice and pretty */
                            
                            h2 {
                                color: #333;
                                margin-bottom: 10px;
                            }
                            
                            .alert {
                                padding: 10px;
                                border: 1px solid #ddd;
                                border-radius: 5px;
                                background-color: #dff0d8;
                                color: #3c763d;
                            }
                            
                            .form-group {
                                margin-bottom: 20px;
                            }
                            
                            .form-group label {
                                display: block;
                                margin-bottom: 10px;
                            }
                            
                            .form-group input, .form-group textarea {
                                width: 100%;
                                padding: 10px;
                                margin-bottom: 20px;
                                border: 1px solid #ccc;
                                border-radius: 5px;
                            }
                            
                            .form-group input[type="submit"] {
                                background-color: #4CAF50;
                                color: #fff;
                                padding: 10px 20px;
                                border: none;
                                border-radius: 5px;
                                cursor: pointer;
                            }
                            
                            .form-group input[type="submit"]:hover {
                                background-color: #3e8e41;
                            }
                        </style>
                        <form action="/blogs" method="POST">
                            @csrf
                            @if ($errors->any())
                                <div class="alert alert-danger">
                                    <ul>
                                        @foreach ($errors->all() as $error)
                                            <li>{{ $error }}</li>
                                        @endforeach
                                    </ul>
                                </div>
                            @endif
                            <div class="form-group">
                                <label for="author">Organizer Name:</label>
                                <input type="text" id="author" name="author" value="{{ old('author') }}">
                            </div>
                            <div class="form-group">
                                <label for="blog_title">Event Title:</label>
                                <input type="text" id="blog_title" name="blog_title" value="{{ old('blog_title') }}">
                            </div>
                            <div class="form-group">
                                <label for="blog_content">Event Description:</label>
                                <textarea id="blog_content" name="blog_content">{{ old('blog_content') }}</textarea>
                            </div>
                            <div class="form-group">
                                <input type="submit" value="Submit">
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>