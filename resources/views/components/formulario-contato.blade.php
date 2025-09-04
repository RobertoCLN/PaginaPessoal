<form action="{{ route('contato.store')}}" method="POST" data-aos="fade-up" data-aos-delay="200">
    @csrf
        <div class="row gy-4">

            <div class="col-md-6">
                <label for="name-field" class="pb-2">Your Name</label>
                <input type="text" name="name" id="name-field" class="form-control" required="">
            </div>

            <div class="col-md-6">
                <label for="email-field" class="pb-2">Your Email</label>
                <input type="email" class="form-control" name="email" id="email-field" required="">
            </div>

            <div class="col-md-12">
                <label for="subject-field" class="pb-2">Subject</label>
                <input type="text" class="form-control" name="subject" id="subject-field" required="">
            </div>

            <div class="col-md-12">
                <label for="message-field" class="pb-2">Message</label>
                <textarea class="form-control" name="message" rows="10" id="message-field" required=""></textarea>
            </div>

            <div class="col-md-12 text-center">
                <div class="error-message"></div>
                @if (session('success'))
                    <div class="sent-message">{{ session('success') }}</div>
                @endif
                <x-botao-formulario />
            </div>

        </div>
</form>