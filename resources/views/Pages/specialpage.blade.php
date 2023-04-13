@extends('Pages.page')
@section('pageTitle')
    No solvents, no liquid silicone, no toxic chemicals
@endsection
@section('subcontent')
<div class="row justify-content-center py-5">
    <div class="col text-center">
        <h2 class="text-primary fs-1" id="First_row_title">
            Chemical Free Dry Cleaners
        </h2>
        <hr class="text-secondary" style="width:30%; margin-left:auto; margin-right:auto; border-top: 2.5px dotted">
        <p class="text-start text-secondary" id="First_row_desc">
            Our Dry to Dry clean process uses natural chemical free and environmentally friendly wet cleaning solutions while protecting our customers, neighbours and employees. We have invested in state of the art Dry to Dry technology which insulates garments and fabric from damage usually caused by water.  Our cleaning process eliminates the use of toxic chemicals used by most conventional dry cleaners. We clean everything that has the Dry clean only symbol in a more gentle way without leaving any toxic chemical residue or smell.  All our cleaning agents are bio-degradable and friendly to the environment. Save money over the longer term with our flexible pricing plans, click for more.
        </p>
        <br>
        <h2 class="text-secondary fs-1" id="First_row_title">
            Power and Water
        </h2>
        <hr class="text-secondary" style="width:30%; margin-left:auto; margin-right:auto; border-top: 2.5px dotted">
        <p class="text-start text-secondary" id="First_row_desc">
            Our investment in the latest Dry to Dry technology ensures our plant limits both power and water consumption. In 2017, we are planning to invest in solar technology to further reduce the power used during our already eco-friendly cleaning processes.
        </p>
        <br>
    </div>
    <div class="col text-center">
        <img class="reveal rev-right img-fluid" alt="{{ env('APP_NAME') }}" id="First_row_picture">
    </div>
</div>
<div class="row justify-content-center py-5">
    <div class="col text-center">
        <h2 class="text-primary fs-1" id="First_row_title">
            Consumables
        </h2>
        <hr class="text-secondary" style="width:30%; margin-left:auto; margin-right:auto; border-top: 2.5px dotted">
        <p class="text-start text-secondary" id="First_row_desc">
            Our customer garments are returned clean, chemical free and in degradable bags that we encourage clients to re-use where possible. To reduce waste and impact on the environment we encourage our customers to bring their hangers back to us for recycling.
        </p>
        <br>
        <h2 class="text-secondary fs-1" id="First_row_title">
            Pick-ups & Deliveries
        </h2>
        <hr class="text-secondary" style="width:30%; margin-left:auto; margin-right:auto; border-top: 2.5px dotted">
        <p class="text-start text-secondary" id="First_row_desc">
            Aligned with our commitment to reducing our carbon footprint, Wash.Press has invested in efficient, low emission vans with stop/start technologies while providing Wash.Press customers convenient door to door pick-up and delivery services.
        </p>
        <br>
    </div>
    <div class="col text-center order-first">
        <img class="reveal rev-right img-fluid" alt="{{ env('APP_NAME') }}" id="First_row_picture">
    </div>
</div>
@endsection

@section('page-script')
    <script>
        function getData() {
            setTimeout(() => {
                        document.querySelector(".loader").classList.remove("loader-active");
                        document.querySelector(".section").style.display = "block";
                    }, 1000);
            }
    </script>
@endsection