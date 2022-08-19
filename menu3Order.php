<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bootstrap demo</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">
</head>

<body>
    <p class="text-center fs-2 mt-5">Fill this Form to confirm your order</p>
    <div class="container ">
        <div class="row">
            <div class="col-3"></div>
            <div class="col-7 mb-3  border  shadow-lg p-3 mb-5 bg-body rounded">

                <div class="d-flex flex-column mb-3  fs-6  center">
                    <p class="fs-6">Selected Food Item</p>
                    <div class="p-2">Food Item:
                    <div class="p-2">Price:</div>
                    <div class="p-2">qty<input type="number" class="form-control" id="">
                    </div>
                </div>
            </div>

        </div>
        <div class="row">
            <div class="col-3"></div>
            <div class="col-7  border  shadow-lg p-3 mb-5 bg-body rounded">

                <div class="mb-3">
                    <label for="exampleFormControlInput1" class="form-label">Name:</label>
                    <input type="text" class="form-control" name="name">

                  </div>
                  <div class="mb-3">
                    <label for="exampleFormControlTextarea1" class="form-label">Phone Number:</label>
                    <input type="number" class="form-control" name="phoneNumber">
                  </div>
                  <div class="mb-3">
                    <label for="exampleFormControlTextarea1" class="form-label">Email</label>
                    <input type="email" class="form-control" name="email">
                    
                  </div>
                  <div class="mb-3">
                    <label for="exampleFormControlTextarea1" class="form-label">Address </label>
                    <textarea class="form-control" id="address" rows="3"></textarea>
                  </div>
                  <button type="submit" class="btn btn-primary mb-2">Confirm Order</button>       
            </div>

        </div>

    </div>





    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-A3rJD856KowSb7dwlZdYEkO39Gagi7vIsF0jrRAoQmDKKtQBHUuLZ9AsSv4jD4Xa"
        crossorigin="anonymous"></script>
</body>

</html>
