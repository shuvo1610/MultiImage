<div class="main-content" style="min-height: 482px;">
        <section class="section">
            <div class="container-fluid">
                <div class="row">
                    <!-- left column -->
                    <div class="col-md-12">
                        <!-- general form elements -->
                        <div class="card card-primary">
                            <div class="card-header">
                                <h3 class="card-title">Employee Information</h3>
                            </div>
                            <div class="card-body">
                                <table class="table table-stripe">
                                    <thead>
                                    <tr>
                                        <td>#</td>
                                        <td>Image1</td>
                                        <td>Image2</td>
                                        <td>Image3</td>

                                        <td>Name</td>
                                    </tr>
                                    </thead>
                                    @foreach($products as $product)
                                        <tr>
                                            <td>{{ $product->id }}</td>
                                                @foreach($product->image as $image)

                                                <td><img src="{{ asset($image) }}" height="100" width="100"></td>

                                                @endforeach
                                            <td>{{ $product->name }}</td>
                                        </tr>
                                    @endforeach
                                </table>
                                <div class="info">
                                    <a href="{{route('product.create')}}" class="btn btn-success">Back</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </div>



