<div class="price" id="price" style="direction:  @if (App::getLocale() == 'en')
ltr
@else
rtl
@endif">
    <div class="container">
        <div class="section-header text-center">
            <p>{{trans('front.WASHING PLAN')}}</p>
            <h2>{{trans('front.Choose Your Plan')}}</h2>
        </div>
        <div class="row">
            <div class="col-md-4">
                <div class="price-item">
                    <div class="@if(LaravelLocalization::getCurrentLocale() == 'ar')  price-header-ar @else price-header @endif">
                        <h3>{{trans('front.Basic Cleaning')}}</h3>
                        <h2><span>$</span><strong>25</strong><span>.99</span></h2>
                    </div>
                    <div class="price-body">
                        <ul>
                            <li><i class="far fa-check-circle"></i>{{trans('front.Seats Washing')}}</li>
                            <li><i class="far fa-check-circle"></i>{{trans('front.Vacuum Cleaning')}}</li>
                            <li><i class="far fa-check-circle"></i>{{trans('front.Exterior Cleaning')}}</li>
                            <li><i class="far fa-times-circle"></i>{{trans('front.Interior Wet Cleaning')}}</li>
                            <li><i class="far fa-times-circle"></i>{{trans('front.Window Wiping')}}</li>
                        </ul>
                    </div>
                    <div class="price-footer">
                        <a class="btn btn-custom" data-toggle="modal" href="#exampleModal">{{trans('front.Book Now')}}</a>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="price-item featured-item">
                    <div class="@if(LaravelLocalization::getCurrentLocale() == 'ar')  price-header-ar @else price-header @endif">
                        <h3>{{trans('front.Premium Cleaning')}}</h3>
                        <h2><span>$</span><strong>35</strong><span>.99</span></h2>
                    </div>
                    <div class="price-body">
                        <ul>
                            <li><i class="far fa-check-circle"></i>{{trans('front.Seats Washing')}}</li>
                            <li><i class="far fa-check-circle"></i>{{trans('front.Vacuum Cleaning')}}</li>
                            <li><i class="far fa-check-circle"></i>{{trans('front.Exterior Cleaning')}}</li>
                            <li><i class="far fa-check-circle"></i>{{trans('front.Interior Wet Cleaning')}}</li>
                            <li><i class="far fa-times-circle"></i>{{trans('front.Window Wiping')}}</li>
                        </ul>
                    </div>
                    <div class="price-footer">
                        <a class="btn btn-custom" data-toggle="modal" href="#exampleModal">{{trans('front.Book Now')}}</a>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="price-item">
                    <div class="@if(LaravelLocalization::getCurrentLocale() == 'ar')  price-header-ar @else price-header @endif">
                        <h3>{{trans('front.Complex Cleaning')}}</h3>
                        <h2><span>$</span><strong>49</strong><span>.99</span></h2>
                    </div>
                    <div class="price-body">
                        <ul>
                            <li><i class="far fa-check-circle"></i>{{trans('front.Seats Washing')}}</li>
                            <li><i class="far fa-check-circle"></i>{{trans('front.Vacuum Cleaning')}}</li>
                            <li><i class="far fa-check-circle"></i>{{trans('front.Exterior Cleaning')}}</li>
                            <li><i class="far fa-check-circle"></i>{{trans('front.Interior Wet Cleaning')}}</li>
                            <li><i class="far fa-check-circle"></i>{{trans('front.Window Wiping')}}</li>
                        </ul>
                    </div>
                    <div class="price-footer">
                        <a class="btn btn-custom" data-toggle="modal" href="#exampleModal">{{trans('front.Book Now')}}</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- Book-form -->


<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h4>{{trans('front.Book Now')}}</h4>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>

            <div class="modal-body">

                <!-- add_form -->

                <form action="{{route('message.store')}}" method="POST">
                    @csrf
                    <!------------start_car_type------------>
                    <label for="car">
                        <h6> {{trans('front.Car Type')}} :</h6>
                    </label><br>
                    <div class="row" id="car">

                        <div class="col">
                            <label class="radio-container">
                                <input type="radio" name="cartype" value="Large">
                                <span class="radio-icon"></span>
                                <img src="{{ asset('Front-End') }}/img/car1.png" style="width: 80% ; height: 80%">
                                <p>{{trans('front.Large')}}</p>
                            </label>
                        </div>

                        <div class="col">
                            <label class="radio-container">
                                <input type="radio" name="cartype" value="Medium">
                                <span class="radio-icon"></span>
                                <img src="{{ asset('Front-End') }}/img/car2.png" style="width: 80% ; height: 80%">
                                <p>{{trans('front.Medium')}}</p>
                            </label>
                        </div>

                        <div class="col">
                            <label class="radio-container">
                                <input type="radio" name="cartype" value="Small">
                                <span class="radio-icon"></span>
                                <img src="{{ asset('Front-End') }}/img/car3.png" style="width: 80% ; height: 80%">
                                <p>{{trans('front.Small')}}</p>
                            </label>
                        </div>

                    </div>
                    <!------------End_car_type------------>

                    <!------------Start_Car_Brand------------>
                    <div class="form-group">
                        <div class="container mt-5">
                            <div class="dropdown" id="car-brand">
                                <div class="btn-group dropright">
                                    <button type="button" class="btn btn-custom">
                                        {{trans('front.Car Brand')}}
                                    </button>
                                    <select id="dropdown" class="btn btn-custom" name="carbrand">
                                        <option value="Toyota">Toyota</option>
                                        <option value="Ford">Ford</option>
                                        <option value="Chevrolet">Chevrolet</option>
                                        <option value="Honda">Honda</option>
                                        <option value="Nissan">Nissan</option>
                                        <option value="BMW">BMW</option>
                                        <option value="Mercedes-Benz">Mercedes-Benz</option>
                                        <option value="Audi">Audi</option>
                                        <option value="Volkswagen">Volkswagen</option>
                                        <option value="Hyundai">Hyundai</option>
                                        <option value="Kia">Kia</option>
                                        <option value="Subaru">Subaru</option>
                                        <option value="Porsche">Porsche</option>
                                        <option value="Jaguar">Jaguar</option>
                                        <option value="Land Rover">Land Rover</option>
                                        <option value="Tesla">Tesla</option>
                                        <option value="Volvo">Volvo</option>
                                        <option value="Mazda">Mazda</option>
                                        <option value="Fiat">Fiat</option>
                                        <option value="Jeep">Jeep</option>
                                    </select>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!------------End_Car_Brand------------>

                    <!------------Start_Car_Color------------>
                    <div class="form-group">
                        <div class="container mt-5">
                            <div class="dropdown" id="car-brand">
                                <div class="btn-group dropright">
                                    <button type="button" class="btn btn-custom">
                                        {{trans('front.Car Color')}} :
                                    </button>
                                    <button type="button" class="btn btn-custom dropdown-toggle dropdown-toggle-split" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                    </button>
                                    <div class="dropdown-menu">
                                        <input type="color" id="colorPicker" name="color">
                                        <p>{{trans('front.Selected Color')}} <span id="selectedColor">#FFFFFF</span></p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!------------End_Car_Color------------>

                    <!------------Start_Plate_Number------------>
                    <div class="form-group">
                        <div class="container mt-5">
                            <h6>{{trans('front.Plate Number')}} :</h6>
                            <label>
                                <input type="text" maxlength="1" name="Plate1" class="letter-box" style="width: 10% ; text-align: center" autofocus>
                                <input type="text" maxlength="1" name="Plate2" class="letter-box" style="width: 10% ; text-align: center" disabled>
                                <input type="text" maxlength="1" name="Plate3" class="letter-box" style="width: 10% ; text-align: center" disabled>
                                <input type="number" name="Plate4" class="number-box" style="width: 30% ; text-align: center" disabled>
                            </label>
                        </div>
                    </div>
                    <!------------End_Plate_Number------------>

                    <div class="modal-footer">
                        <button type="button" class="btn btn-custom" data-dismiss="modal">{{trans('front.CLose')}}</button>
                        <button type="submit" class="btn btn-custom">{{trans('front.book')}}</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
<script>
    const colorPicker = document.getElementById('colorPicker');
    const selectedColor = document.getElementById('selectedColor');

    colorPicker.addEventListener('input', (event) => {
        const color = event.target.value;
        selectedColor.textContent = color;
        selectedColor.style.color = color;
    });
</script>
<script>
    const letterBoxes = document.querySelectorAll('.letter-box');
    const numberBox = document.querySelector('.number-box');

    letterBoxes.forEach((box, index) => {
        box.addEventListener('input', (event) => {
            const input = event.target;
            const value = input.value;

            if (value.length === 1) {
                if (index < letterBoxes.length - 1) {
                    letterBoxes[index + 1].removeAttribute('disabled');
                    letterBoxes[index + 1].focus();
                } else if (index === letterBoxes.length - 1) {
                    numberBox.removeAttribute('disabled');
                    numberBox.focus();
                }
            }
        });
    });

    numberBox.addEventListener('input', (event) => {
        const input = event.target;
        let value = input.value;

        if (value.length > 4) {
            value = value.slice(0, 4);
            input.value = value;
        }
    });
</script>
