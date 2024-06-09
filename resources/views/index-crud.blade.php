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
            <a
                name=""
                id=""
                class="btn btn-primary m-3"
                href="{{Route('crud.create')}}"
                role="button"
                >Create</a
            >
            
            <div
                class="table-responsive"
            >
                <table
                    class="table table-primary"
                >
                    <thead>
                        <tr>
                            <th scope="col">Full Name</th>
                            <th scope="col">Email</th>
                            <th scope="col">Telephone</th>
                            <th scope="col">Address</th>
                            <th scope="col">Country</th>
                            <th scope="col">Gender</th>
                            <th scope="col">Subcription</th>
                            <th scope="col">Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($crud as $cruds)
                        <tr class="">
                            <td>{{$cruds->full_name}}</td>
                            <td>{{$cruds->email}}</td>
                            <td>{{$cruds->tel}}</td>
                            <td>{{$cruds->address}}</td>
                            <td>{{$cruds->country}}</td>
                            <td>{{$cruds->gender}}</td>
                            <td>{{$cruds->subcription}}</td>
                            <td><a
                                name=""
                                id=""
                                class="btn btn-primary"
                                href="{{Route('crud.edit',$cruds->id)}}"
                                role="button"
                                >Edit</a
                            >
                        </tr>
                        @endforeach
                    </tbody>
                </table>
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
