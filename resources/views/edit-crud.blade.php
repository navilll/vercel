<!doctype html>
<html lang="en">
    <head>
        <title>Title</title>
        <!-- Required meta tags -->
        <meta charset="utf-8" />
        <meta
            name="viewport"
            content="width=device-width, initial-scale=1, shrink-to-fit=no"
        />

        <!-- Bootstrap CSS v5.2.1 -->
        <link
            href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css"
            rel="stylesheet"
            integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN"
            crossorigin="anonymous"
        />
    </head>

    <body>
        <header>
            <!-- place navbar here -->
        </header>
        <main>
            <div class="card">
                <div class="card-body">
                    <form action="{{Route('crud.update',$crud->id)}}" method="post">
                        @csrf
                        @method('put')
                        <div class="mb-3">
                            <label for="fullname" class="form-label">Full Name</label>
                            <input
                                type="text"
                                class="form-control"
                                name="fullname"
                                id="fullname"
                                aria-describedby="helpId"
                                placeholder=""
                                value="{{$crud->full_name}}"
                            />
                            @error('fullname')
                                <small id="helpId" class="form-text text-danger">{{$message}}</small>
                            @enderror
                        </div>

                        <div class="mb-3">
                            <label for="email" class="form-label">Email</label>
                            <input
                                type="email"
                                class="form-control"
                                name="email"
                                id="email"
                                aria-describedby="helpId"
                                placeholder=""
                                value="{{$crud->email}}"
                            />
                            @error('email')
                            <small id="helpId" class="form-text text-danger">{{$message}}</small>
                            @enderror
                        </div>

                        <div class="mb-3">
                            <label for="tel" class="form-label">Telephone</label>
                            <input
                                type="number"
                                class="form-control"
                                name="tel"
                                id="tel"
                                aria-describedby="helpId"
                                placeholder=""
                                value="{{$crud->tel}}"
                            />
                            @error('tel')
                            <small id="helpId" class="form-text text-danger">{{$message}}</small>
                            @enderror
                        </div>

                        <div class="mb-3">
                            <label for="address" class="form-label">Address</label>
                            <input
                                type="text"
                                class="form-control"
                                name="address"
                                id="address"
                                aria-describedby="helpId"
                                placeholder=""
                                value="{{$crud->address}}"
                            />
                            @error('address')
                            <small id="helpId" class="form-text text-danger">{{$message}}</small>
                            @enderror
                        </div>
                        
                        <div class="mb-3">
                            <label for="country" class="form-label">Country</label>
                            <select
                                class="form-select form-select-lg"
                                name="country"
                                id="country"
                            >
                                <option selected>Select one</option>
                                @foreach($country as $countries)
                                <option value="{{$countries->name}}">{{$countries->name}}</option>
                                @endforeach
                            </select>

                            @error('country')
                            <small id="helpId" class="form-text text-danger">{{$message}}</small>
                            @enderror
                        </div>

                        <div class="mb-3">
                            <div class="form-check">
                                <input class="form-check-input" type="radio" value='male' name="gender" id="male" />
                                <label class="form-check-label" for="male"> Male </label>
                            </div>
                            <div class="form-check">
                                <input class="form-check-input" type="radio" value='female' name="gender" id="female" />
                                <label class="form-check-label" for="female"> Female </label>
                            </div>  
                            @error('gender')
                            <small id="helpId" class="form-text text-danger">{{$message}}</small>
                            @enderror
                        </div>

                        <div class="mb-3">
                            <div class="form-check">
                                <input class="form-check-input" type="checkbox" value='weekly' name="subcription[]" id="week" />
                                <label class="form-check-label" for="week"> Weekly </label>
                            </div>
                            <div class="form-check">
                                <input class="form-check-input" type="checkbox" value='monthly' name="subcription[]" id="monthly" />
                                <label class="form-check-label" for="yearly"> monthly </label>
                            </div>

                            <div class="form-check">
                                <input class="form-check-input" type="checkbox" value='yearly' name="subcription[]" id="yearly" />
                                <label class="form-check-label" for="yearly"> yearly </label>
                            </div>
                            @error('subcription')
                                <small id="helpId" class="form-text text-danger">{{$message}}</small>
                            @enderror
                        </div>

                        <div class="mb-3">
                            <button
                                type="submit"
                                class="btn btn-primary"
                            >
                                Submit
                            </button>
                            
                        </div>
                    </form>
                </div>
            </div>
            
            
        </main>
        <footer>
            <!-- place footer here -->
        </footer>
        <!-- Bootstrap JavaScript Libraries -->
        <script
            src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js"
            integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r"
            crossorigin="anonymous"
        ></script>

        <script
            src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.min.js"
            integrity="sha384-BBtl+eGJRgqQAUMxJ7pMwbEyER4l1g+O15P+16Ep7Q9Q+zqX6gSbd85u4mG4QzX+"
            crossorigin="anonymous"
        ></script>
    </body>
</html>
