<div class="row">
    <div class="col-12 col-md-8 ">
        <div class="mat-input mt-5 float-left">
            <div class="mat-input-outer">
                <input type="text" name="name" autocomplete="off">
                <label class="">{!! get_section(3, 'name')->description !!}*</label>
                <div class="border"></div>
            </div>
        </div>
    </div>
    <div class="w-100"></div>
    <div class="col-12 col-md-4 col-lg-4">
        <div class="mat-input  float-left">
            <div class="mat-input-outer mt-4">
                <input type="text" name="email" autocomplete="off">
                <label class="">{!! get_section(3, 'email')->description !!}*</label>
                <div class="border"></div>
            </div>
        </div>
    </div>
    <div class="col-12 col-md-4 col-lg-4">
        <div class="mat-input float-left">
            <div class="mat-input-outer mt-4 ml-md-n6 ml-lg-n6">
                <input type="text" name="phone" autocomplete="off">
                <label class="">{!! get_section(3, 'phone')->description !!}*</label>
                <div class="border"></div>
            </div>
        </div>
    </div>
    <div class="w-100"></div>
    <div class="col-12 col-md-8 ">
        <div class="mat-input mt-5 float-left">
            <div class="mat-input-outer">
                <textarea name="message" cols="30" rows="10"></textarea>
                <label class="">{!! get_section(3, 'message')->description !!}*</label>
                <div class="border"></div>
            </div>
        </div>
    </div>
    <div class="w-100"></div>
    <div class="col-12 col-md-6 text-center">
        <div class="spinner-contacto" style="display: none">
            <div class="col-12 text-center mt-1 pb-5">
                <i class="fas fa-spinner fa-spin text-muted"></i>
            </div>
        </div>
    </div>

    <div class="col-12 col-md-10 float-left">
        <div class="mat-input mt-3 text-center ">
            <div class="mat-input-outer">
                <button type="submit"
                        class="btn btn-primary float-right float-md-none col-5 col-md-4 col-lg-2 btn-sectionCircle ml-0 ml-md-3">
                    Enviar
                </button>
            </div>
        </div>
    </div>
</div>
<div class="w-100"></div>
