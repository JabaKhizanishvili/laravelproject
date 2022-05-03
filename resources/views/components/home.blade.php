@extends('components.main')

@section('main')
 <div class="linear_bg">
    <div class="wrapper">
      <h2>გამდიდრების დროა</h2>
      <p>
        ჩვენ გაძლევთ სტრატეგიას, ინსტრუმენტს და ზღვა შესაძლებლობას
        გამოგზავნე იმეილი და მიიღე ყველა სიახლე
      </p>
      <!-- <div class="subscribe">
        <input type="text" placeholder="E-mail" name="" id="" />
        <button class="main_btn">გამოიწერე</button>
      </div> -->
    </div>
  </div>
  <div class="wrapper">
    <form action="">
      <p class="head">ან გაიარე რეგისტრაცია და შემოგვიერთდი</p>
      <input type="text" placeholder="სახელი" name="" id="" />
      <input type="text" placeholder="გვარი" name="" id="" />
      <input type="text" placeholder="Email" name="" id="" />
      <input type="tel" placeholder="ტელეფონის ნომერი" name="" id="" />
      <button class="main_btn">რეგისტრაცია</button>
    </form>
  </div>
  <img class="abs_img" src="img/bg/2.png" alt="" />
</section>
<section class="partners wrapper">
  <div class="f30 purple">ლიკვიდურობის მომწოდებლები</div>
  <div class="flex">
    <a href="#">
      <img src="img/partners/1.png" alt="" />
    </a>
    <a href="#">
      <img src="img/partners/2.png" alt="" />
    </a>
    <a href="#">
      <img src="img/partners/3.png" alt="" />
    </a>
    <a href="#">
      <img src="img/partners/4.png" alt="" />
    </a>
    <a href="#">
      <img src="img/partners/5.png" alt="" />
    </a>
  </div>
</section>
<section class="banks">
  <div class="f30">თანხის განაღდება</div>
  <div class="wrapper flex centered">
    <a href="#"
      ><div class="box">
        <img src="img/banks/1.png" alt="" /></div
    ></a>
    <a href="#"
      ><div class="box">
        <img src="img/banks/2.png" alt="" /></div
    ></a>
  </div>
</section>
<section class="business_training">
  <div class="f30 purple">ბიზნეს ტრენინგი</div>
  <p style="text-align: center; margin-top: 20px">
    უფასო ბიზნეს ტრენინგზე ადგილები შეზღუდულია
  </p>
  <div class="flex wrapper" style="justify-content: flex-end">
    <img class="_img" src="img/bg/3.png" alt="" />
    <div class="right">
      <div class="box_grid">
        <div class="box">
          <img src="img/business/1.svg" alt="" />
          <p>უფასო</p>
        </div>
        <div class="box">
          <img src="img/business/2.svg" alt="" />
          <p>12 გაკვეთილი</p>
        </div>
        <div class="box">
          <img src="img/business/3.svg" alt="" />
          <p>
            ქართული <br />
            ინგლისური <br />
            რუსული
          </p>
        </div>
        <div class="box">
          <img src="img/business/4.svg" alt="" />
          <p>სერთიფიკატი</p>
        </div>
      </div>
      <div class="check_grid">
        <p class="nux">ვაჭრობის სწორი სტრატეგიები</p>
        <p class="nux">ბაზრის ფუნდამენტური ანალიზი</p>
        <p class="nux">ბოლო თაობის ინსტრუმენტები</p>
        <p class="nux">სავაჭრო ტენდენციების ანალიზი</p>
      </div>
      <form action="{{route('register')}}" method="POST">
        <p class="head f30 purple">გაიარე რეგისტრაცია მარტივად</p>
        @csrf
        <input type="text" placeholder="სახელი" name="name" id="" value="{{old("name")}}" / >
        <span class='text-danger'>@error('name') {{$message}} @enderror</span>
        <input type="text" placeholder="გვარი" name="lastname" id="" value="{{old("lastname")}}" />
        <span class='text-danger'>@error('lastname') {{$message}} @enderror</span>
        <input type="text" placeholder="Email" name="email" id="" value="{{old("email")}}" />
        <span class='text-danger'>@error('email') {{$message}} @enderror</span>
        <input type="number" placeholder="ტელეფონის ნომერი" name="phone" id="" value="{{old("phone")}}" />
        <span class='text-danger'>@error('phone') {{$message}} @enderror</span>
        <p><button class="main_btn">რეგისტრაცია</button></p>
      </form>
    </div>
  </div>
</section>

@if (Session::get('success'))
<script>
    Swal.fire(
      'Good job!',
      'წარმატებით გაიარე რეგისტრაცია!',
      'success'
    )
    </script>
@elseif (Session::get('fail'))
<script>
    Swal.fire({
  icon: 'error',
  title: 'Oops...',
  text: 'Something went wrong!',
  footer: '<a href="">Why do I have this issue?</a>'
})
</script>
@endif



@endsection
