
@extends('front.layouts.master')
@section('title','iletişim')
@section('bg','https://www.strathfield.nsw.gov.au/wp-content/uploads/2020/04/header-contact-1536x560.jpg')
@section('content')


<div class="col-md-10 col-lg-8 col-xl-7">
    {{-- bu formdan mesajı gönderince controller dan işlem başarılı mesajını getiriyor --}}
    @if(session('success'))
    <div class="alert alert-success">
        {{session('success')}}
    </div>
    @endif

    @if($errors->any())
    <div class="alert alert-warning">
      <ul>
        @foreach($errors->all() as $error)
            <li>{{$error}}</li>
        @endforeach
      </ul>
    </div>
    @endif
    <p>Bizimle İleişime Geçin</p>
    <div class="my-5">
        <!-- * * * * * * * * * * * * * * *-->
        <!-- * * SB Forms Contact Form * *-->
        <!-- * * * * * * * * * * * * * * *-->
        <!-- This form is pre-integrated with SB Forms.-->
        <!-- To make this form functional, sign up at-->
        <!-- https://startbootstrap.com/solution/contact-forms-->
        <!-- to get an API token!-->
        <form method="POST" action="{{route('contact.post')}}">
            @csrf
            <div class="form-floating">
                <input class="form-control" id="name" value="{{old('name')}}" type="text" name="name" placeholder="Ad - Soyad" required />
                <label for="name">Ad - Soyad</label>
               
            </div>
            <div class="form-floating">
                <input class="form-control" id="email" type="email" value="{{old('email')}}" name="email"  placeholder="Enter your email..." required />
                <label for="email">Email adresi</label>
              
            </div>
            <div >
               
                <select name="topic" class="form-control" id="topic" required>

                    <option selected="- Bir Konu Seçin -">- Bir Konu Seçin -</option>
                  <option value="Destek">Destek</option>
                  <option value="Bilgi">Bilgi</option>
                  <option value="Kariyer">Kariyer</option>
                  <option value="Genel">Genel</option>
                </select>
            </div>
            <div class="form-floating">
                <textarea class="form-control" id="message" name="message" placeholder="Enter your message here..." style="height: 12rem" required>{{old('message')}}</textarea>
                <label for="message">Mesajınız</label>
             
            </div>
            <br />
            <!-- Submit success message-->
            <!---->
            <!-- This is what your users will see when the form-->
            <!-- has successfully submitted-->
            <div class="d-none" id="submitSuccessMessage">
                <div class="text-center mb-3">
                    <div class="fw-bolder">Form submission successful!</div>
                    To activate this form, sign up at
                    <br />
                    <a href="https://startbootstrap.com/solution/contact-forms">https://startbootstrap.com/solution/contact-forms</a>
                </div>
            </div>
            <!-- Submit error message-->
            <!---->
            <!-- This is what your users will see when there is-->
            <!-- an error submitting the form-->
            <div class="d-none" id="submitErrorMessage"><div class="text-center text-danger mb-3">Error sending message!</div></div>
            <!-- Submit Button-->
            <button class="btn btn-primary text-uppercase " id="submitButton" type="submit">Gönder</button>
        </form>
    </div>
</div>
@endsection