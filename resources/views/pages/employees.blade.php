@extends('main')

@section('title', 'Employees')


@section('content')

    <div class="col-md-10">
        <div class="card">
            <div class="card-body">
                <h5>Employees List</h5>
                <div class="row">
                    <div class="col-md-6">


                                <a href="/add">
                                <button class="btn btn-primary" type="submit" href="/add">
                                    Add New
                                </button>
                                </a>
                    </div>
                    <div class="col-md-6">
                        <form class="form-inline my-2 my-lg-0">
                            <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
                            <button class="btn btn-outline-primary my-2 my-sm-0" type="submit">
                                <i class="fa fa-search" aria-hidden="true"></i>
                            </button>
                        </form>
                    </div>
                </div>
                <table class="table">
                    <thead class="thead-dark">
                    <tr>
                        <th scope="col">Employee ID</th>
                        <th scope="col">Name</th>
                        <th scope="col">Join Date</th>
                        <th scope="col">Role</th>
                        <th scope="col">Action</th>
                    </tr>
                    </thead>
                    <tbody>
                    <tr>
                        <th scope="row">
                            AW-0212
                        </th>
                        <td>Jane Hunt</td>
                        <td>01/03/2014</td>
                        <td>Android Developer</td>
                        <td>
                                <a href="/view">
                                <button class="btn btn-primary" type="submit">
                                    <i class="fa fa-eye" aria-hidden="true"></i>
                                </button>
                                </a>
                                <a href="/update">
                                <button class="btn btn-primary" type="submit">
                                    <i class="fa fa-pencil-square-o" aria-hidden="true"></i>
                                </button>
                                </a>
                            <form method="post" action="" class="crud">
                                <input type="hidden" name="id">
                                <!-- Button trigger modal -->
                                <button type="button" class="btn btn-danger" data-toggle="modal" data-target="#exampleModal">
                                    <i class="fa fa-trash-o" aria-hidden="true"></i>
                                </button>

                                <!-- Modal -->
                                <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                    <div class="modal-dialog" role="document">
                                        <div class="modal-content">
                                            <div class="modal-header">
                                                <h5 class="modal-title" id="exampleModalLabel">Delete Employee</h5>
                                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                    <span aria-hidden="true">&times;</span>
                                                </button>
                                            </div>
                                            <div class="modal-body">
                                                Are you sure you want to delete this?
                                            </div>
                                            <div class="modal-footer">
                                                <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancel</button>
                                                <button type="button" class="btn btn-danger">Delete</button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </form>
                        </td>
                    </tr>

                    <tr>
                        <th scope="row">
                            AW-0213
                        </th>
                        <td>Chris Hemworth</td>
                        <td>12/02/2015</td>
                        <td>iOS Developer</td>
                        <td>
                            <form method="post" action="" class="crud">
                                <input type="hidden" name="id">
                                <button class="btn btn-primary" type="submit">
                                    <i class="fa fa-eye" aria-hidden="true"></i>
                                </button>
                            </form>
                            <form method="post" action="" class="crud">
                                <input type="hidden" name="id">
                                <button class="btn btn-primary" type="submit">
                                    <i class="fa fa-pencil-square-o" aria-hidden="true"></i>
                                </button>
                            </form>
                            <form method="post" action="" class="crud">
                                <input type="hidden" name="id">
                                <!-- Button trigger modal -->
                                <button type="button" class="btn btn-danger" data-toggle="modal" data-target="#exampleModal">
                                    <i class="fa fa-trash-o" aria-hidden="true"></i>
                                </button>

                                <!-- Modal -->
                                <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                    <div class="modal-dialog" role="document">
                                        <div class="modal-content">
                                            <div class="modal-header">
                                                <h5 class="modal-title" id="exampleModalLabel">Delete Employee</h5>
                                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                    <span aria-hidden="true">&times;</span>
                                                </button>
                                            </div>
                                            <div class="modal-body">
                                                Are you sure you want to delete this?
                                            </div>
                                            <div class="modal-footer">
                                                <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancel</button>
                                                <button type="button" class="btn btn-danger">Delete</button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </form>
                        </td>
                    </tr>

                    <tr>
                        <th scope="row">
                            AW-0214
                        </th>
                        <td>Lee Bryan</td>
                        <td>01/05/2015</td>
                        <td>Designer</td>
                        <td>
                            <form method="post" action="" class="crud">
                                <input type="hidden" name="id">
                                <button class="btn btn-primary" type="submit">
                                    <i class="fa fa-eye" aria-hidden="true"></i>
                                </button>
                            </form>
                            <form method="post" action="" class="crud">
                                <input type="hidden" name="id">
                                <button class="btn btn-primary" type="submit">
                                    <i class="fa fa-pencil-square-o" aria-hidden="true"></i>
                                </button>
                            </form>
                            <form method="post" action="" class="crud">
                                <input type="hidden" name="id">
                                <!-- Button trigger modal -->
                                <button type="button" class="btn btn-danger" data-toggle="modal" data-target="#exampleModal">
                                    <i class="fa fa-trash-o" aria-hidden="true"></i>
                                </button>

                                <!-- Modal -->
                                <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                    <div class="modal-dialog" role="document">
                                        <div class="modal-content">
                                            <div class="modal-header">
                                                <h5 class="modal-title" id="exampleModalLabel">Delete Employee</h5>
                                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                    <span aria-hidden="true">&times;</span>
                                                </button>
                                            </div>
                                            <div class="modal-body">
                                                Are you sure you want to delete this?
                                            </div>
                                            <div class="modal-footer">
                                                <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancel</button>
                                                <button type="button" class="btn btn-danger">Delete</button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </form>
                        </td>
                    </tr>

                    <tr>
                        <th scope="row">
                            AW-0215
                        </th>
                        <td>Robert Downey</td>
                        <td>22/07/2016</td>
                        <td>Team Leader</td>
                        <td>
                            <form method="post" action="" class="crud">
                                <input type="hidden" name="id">
                                <button class="btn btn-primary" type="submit">
                                    <i class="fa fa-eye" aria-hidden="true"></i>
                                </button>
                            </form>
                            <form method="post" action="" class="crud">
                                <input type="hidden" name="id">
                                <button class="btn btn-primary" type="submit">
                                    <i class="fa fa-pencil-square-o" aria-hidden="true"></i>
                                </button>
                            </form>
                            <form method="post" action="" class="crud">
                                <input type="hidden" name="id">
                                <!-- Button trigger modal -->
                                <button type="button" class="btn btn-danger" data-toggle="modal" data-target="#exampleModal">
                                    <i class="fa fa-trash-o" aria-hidden="true"></i>
                                </button>

                                <!-- Modal -->
                                <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                    <div class="modal-dialog" role="document">
                                        <div class="modal-content">
                                            <div class="modal-header">
                                                <h5 class="modal-title" id="exampleModalLabel">Delete Employee</h5>
                                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                    <span aria-hidden="true">&times;</span>
                                                </button>
                                            </div>
                                            <div class="modal-body">
                                                Are you sure you want to delete this?
                                            </div>
                                            <div class="modal-footer">
                                                <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancel</button>
                                                <button type="button" class="btn btn-primary">Delete</button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </form>
                        </td>
                    </tr>

                    <tr>
                        <th scope="row">
                            AW-0216
                        </th>
                        <td>Scarlet Johanson</td>
                        <td>01/08/2016</td>
                        <td>Android Developer</td>
                        <td>
                            <form method="post" action="" class="crud">
                                <input type="hidden" name="id">
                                <button class="btn btn-primary" type="submit">
                                    <i class="fa fa-eye" aria-hidden="true"></i>
                                </button>
                            </form>
                            <form method="post" action="" class="crud">
                                <input type="hidden" name="id">
                                <button class="btn btn-primary" type="submit">
                                    <i class="fa fa-pencil-square-o" aria-hidden="true"></i>
                                </button>
                            </form>
                            <form method="post" action="" class="crud">
                                <input type="hidden" name="id">
                                <!-- Button trigger modal -->
                                <button type="button" class="btn btn-danger" data-toggle="modal" data-target="#exampleModal">
                                    <i class="fa fa-trash-o" aria-hidden="true"></i>
                                </button>

                                <!-- Modal -->
                                <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                    <div class="modal-dialog" role="document">
                                        <div class="modal-content">
                                            <div class="modal-header">
                                                <h5 class="modal-title" id="exampleModalLabel">Delete Employee</h5>
                                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                    <span aria-hidden="true">&times;</span>
                                                </button>
                                            </div>
                                            <div class="modal-body">
                                                Are you sure you want to delete this?
                                            </div>
                                            <div class="modal-footer">
                                                <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancel</button>
                                                <button type="button" class="btn btn-danger">Delete</button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </form>
                        </td>
                    </tr>

                    <tr>
                        <th scope="row">
                            AW-0218
                        </th>
                        <td>Michael Bay</td>
                        <td>01/11/2016</td>
                        <td>Web Developer</td>
                        <td>
                            <form method="post" action="" class="crud">
                                <input type="hidden" name="id">
                                <button class="btn btn-primary" type="submit">
                                    <i class="fa fa-eye" aria-hidden="true"></i>
                                </button>
                            </form>
                            <form method="post" action="" class="crud">
                                <input type="hidden" name="id">
                                <button class="btn btn-primary" type="submit">
                                    <i class="fa fa-pencil-square-o" aria-hidden="true"></i>
                                </button>
                            </form>
                            <form method="post" action="" class="crud">
                                <input type="hidden" name="id">
                                <!-- Button trigger modal -->
                                <button type="button" class="btn btn-danger" data-toggle="modal" data-target="#exampleModal">
                                    <i class="fa fa-trash-o" aria-hidden="true"></i>
                                </button>

                                <!-- Modal -->
                                <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                    <div class="modal-dialog" role="document">
                                        <div class="modal-content">
                                            <div class="modal-header">
                                                <h5 class="modal-title" id="exampleModalLabel">Delete Employee</h5>
                                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                    <span aria-hidden="true">&times;</span>
                                                </button>
                                            </div>
                                            <div class="modal-body">
                                                Are you sure you want to delete this?
                                            </div>
                                            <div class="modal-footer">
                                                <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancel</button>
                                                <button type="button" class="btn btn-danger">Delete</button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </form>
                        </td>
                    </tr>

                    <tr>
                        <th scope="row">
                            AW-0233
                        </th>
                        <td>Chris Pratt</td>
                        <td>02/01/2017</td>
                        <td>Web Developer</td>
                        <td>
                            <form method="post" action="" class="crud">
                                <input type="hidden" name="id">
                                <button class="btn btn-primary" type="submit">
                                    <i class="fa fa-eye" aria-hidden="true"></i>
                                </button>
                            </form>
                            <form method="post" action="" class="crud">
                                <input type="hidden" name="id">
                                <button class="btn btn-primary" type="submit">
                                    <i class="fa fa-pencil-square-o" aria-hidden="true"></i>
                                </button>
                            </form>
                            <form method="post" action="" class="crud">
                                <input type="hidden" name="id">
                                <!-- Button trigger modal -->
                                <button type="button" class="btn btn-danger" data-toggle="modal" data-target="#exampleModal">
                                    <i class="fa fa-trash-o" aria-hidden="true"></i>
                                </button>

                                <!-- Modal -->
                                <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                    <div class="modal-dialog" role="document">
                                        <div class="modal-content">
                                            <div class="modal-header">
                                                <h5 class="modal-title" id="exampleModalLabel">Delete Employee</h5>
                                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                    <span aria-hidden="true">&times;</span>
                                                </button>
                                            </div>
                                            <div class="modal-body">
                                                Are you sure you want to delete this?
                                            </div>
                                            <div class="modal-footer">
                                                <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancel</button>
                                                <button type="button" class="btn btn-danger">Delete</button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </form>
                        </td>
                    </tr>

                    <tr>
                        <th scope="row">
                            AW-0235
                        </th>
                        <td>Ariana Grande</td>
                        <td>15/03/2017</td>
                        <td>iOS Developer</td>
                        <td>
                            <form method="post" action="" class="crud">
                                <input type="hidden" name="id">
                                <button class="btn btn-primary" type="submit">
                                    <i class="fa fa-eye" aria-hidden="true"></i>
                                </button>
                            </form>
                            <form method="post" action="" class="crud">
                                <input type="hidden" name="id">
                                <button class="btn btn-primary" type="submit">
                                    <i class="fa fa-pencil-square-o" aria-hidden="true"></i>
                                </button>
                            </form>
                            <form method="post" action="" class="crud">
                                <input type="hidden" name="id">
                                <!-- Button trigger modal -->
                                <button type="button" class="btn btn-danger" data-toggle="modal" data-target="#exampleModal">
                                    <i class="fa fa-trash-o" aria-hidden="true"></i>
                                </button>

                                <!-- Modal -->
                                <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                    <div class="modal-dialog" role="document">
                                        <div class="modal-content">
                                            <div class="modal-header">
                                                <h5 class="modal-title" id="exampleModalLabel">Delete Employee</h5>
                                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                    <span aria-hidden="true">&times;</span>
                                                </button>
                                            </div>
                                            <div class="modal-body">
                                                Are you sure you want to delete this?
                                            </div>
                                            <div class="modal-footer">
                                                <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancel</button>
                                                <button type="button" class="btn btn-danger">Delete</button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </form>
                        </td>
                    </tr>

                    <tr>
                        <th scope="row">
                            AW-0235
                        </th>
                        <td>Alissa Violet</td>
                        <td>12/04/2017</td>
                        <td>Assistant</td>
                        <td>
                            <form method="post" action="" class="crud">
                                <input type="hidden" name="id">
                                <button class="btn btn-primary" type="submit">
                                    <i class="fa fa-eye" aria-hidden="true"></i>
                                </button>
                            </form>
                            <form method="post" action="" class="crud">
                                <input type="hidden" name="id">
                                <button class="btn btn-primary" type="submit">
                                    <i class="fa fa-pencil-square-o" aria-hidden="true"></i>
                                </button>
                            </form>
                            <form method="post" action="" class="crud">
                                <input type="hidden" name="id">
                                <!-- Button trigger modal -->
                                <button type="button" class="btn btn-danger" data-toggle="modal" data-target="#exampleModal">
                                    <i class="fa fa-trash-o" aria-hidden="true"></i>
                                </button>

                                <!-- Modal -->
                                <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                    <div class="modal-dialog" role="document">
                                        <div class="modal-content">
                                            <div class="modal-header">
                                                <h5 class="modal-title" id="exampleModalLabel">Delete Employee</h5>
                                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                    <span aria-hidden="true">&times;</span>
                                                </button>
                                            </div>
                                            <div class="modal-body">
                                                Are you sure you want to delete this?
                                            </div>
                                            <div class="modal-footer">
                                                <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancel</button>
                                                <button type="button" class="btn btn-danger">Delete</button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </form>
                        </td>
                    </tr>

                    <tr>
                        <th scope="row">
                            AW-0238
                        </th>
                        <td>Jessica Alba</td>
                        <td>02/06/2017</td>
                        <td>Web Developer</td>
                        <td>
                            <form method="post" action="" class="crud">
                                <input type="hidden" name="id">
                                <button class="btn btn-primary" type="submit">
                                    <i class="fa fa-eye" aria-hidden="true"></i>
                                </button>
                            </form>
                            <form method="post" action="" class="crud">
                                <input type="hidden" name="id">
                                <button class="btn btn-primary" type="submit">
                                    <i class="fa fa-pencil-square-o" aria-hidden="true"></i>
                                </button>
                            </form>
                            <form method="post" action="" class="crud">
                                <input type="hidden" name="id">
                                <!-- Button trigger modal -->
                                <button type="button" class="btn btn-danger" data-toggle="modal" data-target="#exampleModal">
                                    <i class="fa fa-trash-o" aria-hidden="true"></i>
                                </button>

                                <!-- Modal -->
                                <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                    <div class="modal-dialog" role="document">
                                        <div class="modal-content">
                                            <div class="modal-header">
                                                <h5 class="modal-title" id="exampleModalLabel">Delete Employee</h5>
                                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                    <span aria-hidden="true">&times;</span>
                                                </button>
                                            </div>
                                            <div class="modal-body">
                                                Are you sure you want to delete this?
                                            </div>
                                            <div class="modal-footer">
                                                <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancel</button>
                                                <button type="button" class="btn btn-danger">Delete</button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </form>
                        </td>
                    </tr>
                    <hr>
                    </tbody>
                </table>
                <div class="row">
                    <div class="col-md-6">
                        <small>Showing 1 to 10 of 12 entries</small>
                    </div>
                    <div class="col-md-6 text-right">
                        <a href="#" class="previous crud btn btn-outline-primary">&laquo; Previous</a>
                        <a href="#" class="next crud btn btn-outline-primary">Next &raquo;</a>
                    </div>
                </div>

            </div>
        </div>


    </div>

@endsection