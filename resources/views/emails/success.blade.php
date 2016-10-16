@extends('layouts.master')

@section('title', 'Aviso Legal')

@section('bodyclass', 'contact')

@section('content')

  @include('includes.header')

  <div class="page">

    <div class="limit">

      <div class="grid">

        <div class="content-static">


          <div class="contact-form">

            <h1>Mensaje enviado</h1>
            <div class="contact-text">
                <p>Tu mensaje se ha enviado con éxito. En breve nos pondremos en contacto contigo, gracias.</p>
            </div>

          </div>

        </div>

      </div>

    </div>

  </div>

@endsection

