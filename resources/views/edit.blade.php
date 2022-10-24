@extends('master')

@section('content')
{{-- <div
class="container-fluid page-header mb-5 wow fadeIn"
data-wow-delay="0.1s"
></div> --}}
<form action="/update/{{$user->id}}" method="POST" enctype="multipart/form-data">
    @csrf
{{-- @method('PUT') --}}
<section style="background-color: #eee;">
    <div class="container py-5">
      <div class="row">
        <div class="col">
          <nav aria-label="breadcrumb" class="bg-light rounded-3 p-3 mb-4">
            <ol class="breadcrumb mb-0">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item"><a href="#">User</a></li>
              <li class="breadcrumb-item active" aria-current="page">User Profile</li>
            </ol>
          </nav>
        </div>
      </div>
      <div class="row">
        <div class="col-lg-4">
          <div class="card mb-4">
            <div class="card-body text-center">
              <img src="data:image/jpeg;base64,{{  $user->image}}" alt="avatar"
                class="rounded-circle img-fluid" style="width: 150px;">
              <h5 class="my-3">{{ $user->name }}</h5>
              <p class="text-muted mb-1">متطوع</p>
             
            </div>

          
          </div>
        
        </div>
        
        <div class="col-lg-8">
          <div class="card mb-4">
            <div class="card-body">
                <div class="mb-6 text-end">
                    <div class="mb-6 text-end">
                        <label for="name" class="inline-block text-lg  mb-2">
                            الاسم
                        </label>
                        <input
                            type="text"
                            class="border border-gray-200 rounded p-2 w-full"
                            name="name"
                            value="{{$user->name}}"
                        />
                        @error('name')
                            <p class="text-red-500 text-xs mt-1">
                                {{$message}}
                            </p>
                        @enderror
                    </div>
            
                    <div class="mb-6 text-end">
                        <label for="profile_image" class="inline-block text-lg  mb-2">
                            الصورة
                        </label>
                        <input
                            type="file"
                            class="border border-gray-200 rounded p-2 w-full"
                            name="profile_image"
                            
                        />
                        @error('name')
                            <p class="text-red-500 text-xs mt-1">
                                {{$message}}
                            </p>
                        @enderror
                    </div>
            
                    <label for="email" class="inline-block text-lg mb-2"
                        >الايميل</label
                    >
                    <input
                        type="email"
                        class="border border-gray-200 rounded p-2 w-full"
                        name="email"
                        value="{{$user->email}}"
                    />
                    @error('email')
                    <p class="text-red-500 text-xs mt-1">
                        {{$message}}
                    </p>
                @enderror
                </div>
      
                <div class="mb-6 text-end">
                  <label
                      for="phone"
                      class="inline-block text-lg mb-2"
                  >
                  الرقم            </label>
                  <input
                      type="number"
                      class="border border-gray-200 rounded p-2 w-full"
                      name="phone"
                      value="{{ $user->phone  }}"
                  />
                  @error('image')
                  <p class="text-red-500 text-xs mt-1">
                      {{$message}}
                  </p>
              @enderror
              </div>
              <button type="submit" class="btn btn-info">update</button>

        </form>

          <div class="row">
            <div class="col-md-6">
              <div class="card mb-4 mb-md-0">
                <div class="card-body">
                  <p class="mb-4"><span class="text-primary font-italic me-1">assigment</span> Project Status
                  </p>
                  <p class="mb-1" style="font-size: .77rem;">Web Design</p>
                  <div class="progress rounded" style="height: 5px;">
                    <div class="progress-bar" role="progressbar" style="width: 80%" aria-valuenow="80"
                      aria-valuemin="0" aria-valuemax="100"></div>
                  </div>
                  <p class="mt-4 mb-1" style="font-size: .77rem;">Website Markup</p>
                  <div class="progress rounded" style="height: 5px;">
                    <div class="progress-bar" role="progressbar" style="width: 72%" aria-valuenow="72"
                      aria-valuemin="0" aria-valuemax="100"></div>
                  </div>
                  <p class="mt-4 mb-1" style="font-size: .77rem;">One Page</p>
                  <div class="progress rounded" style="height: 5px;">
                    <div class="progress-bar" role="progressbar" style="width: 89%" aria-valuenow="89"
                      aria-valuemin="0" aria-valuemax="100"></div>
                  </div>
                  <p class="mt-4 mb-1" style="font-size: .77rem;">Mobile Template</p>
                  <div class="progress rounded" style="height: 5px;">
                    <div class="progress-bar" role="progressbar" style="width: 55%" aria-valuenow="55"
                      aria-valuemin="0" aria-valuemax="100"></div>
                  </div>
                  <p class="mt-4 mb-1" style="font-size: .77rem;">Backend API</p>
                  <div class="progress rounded mb-2" style="height: 5px;">
                    <div class="progress-bar" role="progressbar" style="width: 66%" aria-valuenow="66"
                      aria-valuemin="0" aria-valuemax="100"></div>
                  </div>
                </div>
              </div>
            </div>
            <div class="col-md-6">
              <div class="card mb-4 mb-md-0">
                <div class="card-body">
                  <p class="mb-4"><span class="text-primary font-italic me-1">assigment</span> Project Status
                  </p>
                  <p class="mb-1" style="font-size: .77rem;">Web Design</p>
                  <div class="progress rounded" style="height: 5px;">
                    <div class="progress-bar" role="progressbar" style="width: 80%" aria-valuenow="80"
                      aria-valuemin="0" aria-valuemax="100"></div>
                  </div>
                  <p class="mt-4 mb-1" style="font-size: .77rem;">Website Markup</p>
                  <div class="progress rounded" style="height: 5px;">
                    <div class="progress-bar" role="progressbar" style="width: 72%" aria-valuenow="72"
                      aria-valuemin="0" aria-valuemax="100"></div>
                  </div>
                  <p class="mt-4 mb-1" style="font-size: .77rem;">One Page</p>
                  <div class="progress rounded" style="height: 5px;">
                    <div class="progress-bar" role="progressbar" style="width: 89%" aria-valuenow="89"
                      aria-valuemin="0" aria-valuemax="100"></div>
                  </div>
                  <p class="mt-4 mb-1" style="font-size: .77rem;">Mobile Template</p>
                  <div class="progress rounded" style="height: 5px;">
                    <div class="progress-bar" role="progressbar" style="width: 55%" aria-valuenow="55"
                      aria-valuemin="0" aria-valuemax="100"></div>
                  </div>
                  <p class="mt-4 mb-1" style="font-size: .77rem;">Backend API</p>
                  <div class="progress rounded mb-2" style="height: 5px;">
                    <div class="progress-bar" role="progressbar" style="width: 66%" aria-valuenow="66"
                      aria-valuemin="0" aria-valuemax="100"></div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    {{-- events section --}}
        {{-- <div class="container h-100">
          <div class="row d-flex flex-wrap justify-content-center align-items-center ">
            
            @foreach ($events as $event)
              <div class="card m-3" style="border-radius: 15px;
              width:35rem;">
                <div class="card-body p-4">
                  <h3 class="mb-3">{{ $event->name }}</h3>
                  <p class="small mb-0"><i class="fas fa-star fa-lg text-warning"></i> <span class="mx-2">|</span>
                    عام <span class="mx-2">|</span> الفعالية في  <strong>{{ $event->location }}</strong> بتاريخ : {{ explode(' ',$event->date)[0] }}
                  </p>
                  <hr class="my-4"> --}}
                  {{-- <div class="d-flex justify-content-start align-items-center">
                    <p class="mb-0 text-uppercase"><i class="fas fa-cog me-2"></i> <span
                        class="text-muted small">settings</span></p>
                    <p class="mb-0 text-uppercase"><i class="fas fa-link ms-4 me-2"></i> <span
                        class="text-muted small">program link</span></p>
                    <p class="mb-0 text-uppercase"><i class="fas fa-ellipsis-h ms-4 me-2"></i> <span
                        class="text-muted small">program link</span>
                        
                  </div> --}}
                  {{-- <div class="widget-49-meeting-action">
                    <a href="#" class="btn btn-sm btn-flash-border-primary">قراءة المزيد</a>
                </div> --}}
              {{-- </div>
            </div>
            @endforeach --}}
          </div>
        </div>


  </section>

@endsection