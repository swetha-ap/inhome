@extends('customermaster')
@section('content')
<!-- Datatable plugin CSS file -->
<link rel="stylesheet" href="https://cdn.datatables.net/1.10.22/css/jquery.dataTables.min.css" />

<!-- jQuery library file -->
<script type="text/javascript" src="https://code.jquery.com/jquery-3.5.1.js">
</script>

<!-- Datatable plugin JS library file -->
<script type="text/javascript" src="https://cdn.datatables.net/1.10.22/js/jquery.dataTables.min.js"></script>
<style>
    .table td {
        text-align: center;
    }

    .table th {
        text-align: center;
        background-color: rgb(17, 17, 80);
        color: white;
    }
    .rating {
        position: relative;
        width: 180px;
        background: transparent;
        display: flex;
        justify-content: center;
        align-items: center;
        gap: .3em;
        padding: 5px;
        overflow: hidden;
        border-radius: 20px;
        box-shadow: 0 0 2px #b3acac;
    }

    .rating__result {
        position: absolute;
        top: 0;
        left: 0;
        transform: translateY(-10px) translateX(-5px);
        z-index: -9;
        font: 3em Arial, Helvetica, sans-serif;
        color: #ebebeb8e;
        pointer-events: none;
    }

    .rating__star {
        font-size: 1.3em;
        cursor: pointer;
        color: #dabd18b2;
        transition: filter linear .3s;
    }

    .rating__star:hover {
        filter: drop-shadow(1px 1px 4px gold);
    }
</style>
<div class="container">
  <br><br>
  <h1 align="center">My Bookings</h1>
    <br><br><br>
    <div class="row">
        <!-- <div class="container"> -->
        <div class="col-md-1"></div>
        <div class="col-md-11">
            <table id="booking" class="table table-striped table-bordered table-sm display" cellspacing="0"
                width="100%">
                <thead>
                    <tr>
                        <th class="th-sm">SNo

                        </th>
                        <th class="th-sm">Service Provider Name

                        </th>
                        <th class="th-sm">Service

                        </th>
                        <th class="th-sm">Place

                        </th>
                        <th class="th-sm">Date

                        </th>
                        <th class="th-sm">Time
                        </th>
                        <th class="th-sm">Status

                        </th>
                        <th class="th-sm">Rating

                        </th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>1</td>
                        <td>ABC</td>
                        <td>Maid</td>
                        <td>Bangalore</td>
                        <td>2022/04/25</td>
                        <td>08:00am</td>
                        <td><button class="btn-success disabled">COMPLETED</button></td>
                        <td><div class="rating">
        <i class="rating__star far fa-star"></i>
        <i class="rating__star far fa-star"></i>
        <i class="rating__star far fa-star"></i>
        <i class="rating__star far fa-star"></i>
        <i class="rating__star far fa-star"></i>
    </div></td>
                    </tr>
                    <tr>
                        <td>2</td>
                        <td>DEF</td>
                        <td>Cook</td>
                        <td>Chennai</td>
                        <td>2022/07/25</td>
                        <td>13:50pm</td>
                        <td><button class="btn-info disabled">ACCEPTED</button> </td>
                        <td><div class="rating">
        <i class="rating__star far fa-star"></i>
        <i class="rating__star far fa-star"></i>
        <i class="rating__star far fa-star"></i>
        <i class="rating__star far fa-star"></i>
        <i class="rating__star far fa-star"></i>
    </div></td>
                    </tr>
                    <tr>
                        <td>3</td>
                        <td>GHI</td>
                        <td>Babysitter</td>
                        <td>Kochi</td>
                        <td>2022/01/12</td>
                        <td>17:00pm</td>
                        <td><button class="btn-info disabled">ACCEPTED</button> </td>
                        <td><div class="rating">
        <i class="rating__star far fa-star"></i>
        <i class="rating__star far fa-star"></i>
        <i class="rating__star far fa-star"></i>
        <i class="rating__star far fa-star"></i>
        <i class="rating__star far fa-star"></i>
    </div></td>
                    </tr>
                    <tr>
                        <td>4</td>
                        <td>IJK</td>
                        <td>Babysitter</td>
                        <td>Kochi</td>
                        <td>2022/01/12</td>
                        <td>17:00pm</td>
                        <td><button class="btn-success disabled">COMPLETED</button></td>
                        <td><div class="rating">
        <i class="rating__star far fa-star"></i>
        <i class="rating__star far fa-star"></i>
        <i class="rating__star far fa-star"></i>
        <i class="rating__star far fa-star"></i>
        <i class="rating__star far fa-star"></i>
    </div></td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>
</div>
<script>
    $(document).ready(function () {
        $('#booking').DataTable({});

                    //   STAR RATING
        const ratingStars = [...document.getElementsByClassName("rating__star")];

function executeRating(stars) {
    const starClassActive = "rating__star fas fa-star";
    const starClassInactive = "rating__star far fa-star";
    const starsLength = stars.length;
    let i;
    stars.map((star) => {
        star.onclick = () => {
            i = stars.indexOf(star);

            if (star.className === starClassInactive) {
                for (i; i >= 0; --i) stars[i].className = starClassActive;
            } else {
                for (i; i < starsLength; ++i) stars[i].className = starClassInactive;
            }
        };
    });
}
executeRating(ratingStars);
    });
</script>
@endsection