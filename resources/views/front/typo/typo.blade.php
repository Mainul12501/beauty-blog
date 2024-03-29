@extends('front.master')

@section('title')

@endsection

@section('ptitle')

@endsection

@section('atitle')

@endsection

@section('body')
    <!-- typography -->
    <section class="wthree-row pt-sm-3  pb-sm-5 pb-3">
        <div class="container py-sm-5 py-3">
            <!-- section title -->
            <h3 class="agile-title">Typography</h3>
            <span class="w3-line"></span>
            <!-- //section title -->
            <div class="pb-5 typo-wthree">
                <h4 class="pt-4 pb-3">Flex</h4>
                <div class="d-flex p-2 bg-flex mb-1">I'm a flexbox container!</div>
                <div class="d-inline-flex p-2 bg-flex mb-1">I'm an inline flexbox container!</div>
                <h5 class="pt-4 pb-3">Flex row</h5>
                <div class="d-flex flex-row bg-flex">
                    <div class="p-2 bg-flex mb-1 bg-flex-item">Flex item 1</div>
                    <div class="p-2 bg-flex mb-1 bg-flex-item">Flex item 2</div>
                    <div class="p-2 bg-flex mb-1 bg-flex-item">Flex item 3</div>
                </div>
                <h5 class="pt-4 pb-3">Flex row-reverse</h5>
                <div class="d-flex flex-row-reverse bg-flex">
                    <div class="p-2 bg-flex mb-1 bg-flex-item">Flex item 1</div>
                    <div class="p-2 bg-flex mb-1 bg-flex-item">Flex item 2</div>
                    <div class="p-2 bg-flex mb-1 bg-flex-item">Flex item 3</div>
                </div>
                <h5 class="pt-4 pb-3">Flex column</h5>
                <div class="d-flex flex-column bg-flex">
                    <div class="p-2 bg-flex mb-1 bg-flex-item">Flex item 1</div>
                    <div class="p-2 bg-flex mb-1 bg-flex-item">Flex item 2</div>
                    <div class="p-2 bg-flex mb-1 bg-flex-item">Flex item 3</div>
                </div>
                <h5 class="pt-4 pb-3">Flex column-reverse</h5>
                <div class="d-flex flex-column-reverse bg-flex">
                    <div class="p-2 bg-flex mb-1 bg-flex-item">Flex item 1</div>
                    <div class="p-2 bg-flex mb-1 bg-flex-item">Flex item 2</div>
                    <div class="p-2 bg-flex mb-1 bg-flex-item">Flex item 3</div>
                </div>
                <h4 class="pt-5 pb-3">Justify Content</h4>
                <h5 class="pt-4 pb-3">Justify Content Start</h5>
                <div class="d-flex justify-content-start bg-flex mb-3">
                    <div class="p-2 bg-flex mb-1 bg-flex-item">Flex item 1</div>
                    <div class="p-2 bg-flex mb-1 bg-flex-item">Flex item 2</div>
                    <div class="p-2 bg-flex mb-1 bg-flex-item">Flex item 3</div>
                </div>
                <h5 class="pt-4 pb-3">Justify Content End</h5>
                <div class="d-flex justify-content-end bg-flex mb-3">
                    <div class="p-2 bg-flex mb-1 bg-flex-item">Flex item 1</div>
                    <div class="p-2 bg-flex mb-1 bg-flex-item">Flex item 2</div>
                    <div class="p-2 bg-flex mb-1 bg-flex-item">Flex item 3</div>
                </div>
                <h5 class="pt-4 pb-3">Justify Content Center</h5>
                <div class="d-flex justify-content-center bg-flex mb-3">
                    <div class="p-2 bg-flex mb-1 bg-flex-item">Flex item 1</div>
                    <div class="p-2 bg-flex mb-1 bg-flex-item">Flex item 2</div>
                    <div class="p-2 bg-flex mb-1 bg-flex-item">Flex item 3</div>
                </div>
                <h5 class="pt-4 pb-3">Justify Content Between</h5>
                <div class="d-flex justify-content-between bg-flex mb-3">
                    <div class="p-2 bg-flex mb-1 bg-flex-item">Flex item 1</div>
                    <div class="p-2 bg-flex mb-1 bg-flex-item">Flex item 2</div>
                    <div class="p-2 bg-flex mb-1 bg-flex-item">Flex item 3</div>
                </div>
                <h5 class="pt-4 pb-3">Justify Content Around</h5>
                <div class="d-flex justify-content-around bg-flex mb-3">
                    <div class="p-2 bg-flex mb-1 bg-flex-item">Flex item 1</div>
                    <div class="p-2 bg-flex mb-1 bg-flex-item">Flex item 2</div>
                    <div class="p-2 bg-flex mb-1 bg-flex-item">Flex item 3</div>
                </div>
                <h4 class="pt-4 pb-3"> Align items</h4>
                <h5 class="pt-4 pb-3">Align Items Start</h5>

                <div class="d-flex align-items-start  bg-flex mb-3" style="height: 100px">
                    <div class="p-2  bg-flex-item">Flex item</div>
                    <div class="p-2  bg-flex-item">Flex item</div>
                    <div class="p-2  bg-flex-item">Flex item</div>
                </div>
                <h5 class="pt-4 pb-3">Align Items End</h5>

                <div class="d-flex align-items-end  bg-flex mb-3" style="height: 100px">
                    <div class="p-2  bg-flex-item">Flex item</div>
                    <div class="p-2  bg-flex-item">Flex item</div>
                    <div class="p-2  bg-flex-item">Flex item</div>
                </div>
                <h5 class="pt-4 pb-3">Align Items Center</h5>

                <div class="d-flex align-items-center  bg-flex mb-3" style="height: 100px">
                    <div class="p-2  bg-flex-item">Flex item</div>
                    <div class="p-2  bg-flex-item">Flex item</div>
                    <div class="p-2  bg-flex-item">Flex item</div>
                </div>
                <h5 class="pt-4 pb-3">Align Items Baseline</h5>

                <div class="d-flex align-items-baseline  bg-flex mb-3" style="height: 100px">
                    <div class="p-2  bg-flex-item">Flex item</div>
                    <div class="p-2  bg-flex-item">Flex item</div>
                    <div class="p-2  bg-flex-item">Flex item</div>
                </div>
                <h5 class="pt-4 pb-3">Align Items Strech</h5>

                <div class="d-flex align-items-stretch  bg-flex" style="height: 100px">
                    <div class="p-2  bg-flex-item">Flex item</div>
                    <div class="p-2  bg-flex-item">Flex item</div>
                    <div class="p-2  bg-flex-item">Flex item</div>
                </div>
                <h4 class="mt-5 mb-3">Lists</h4>
                <div class="row">
                    <div class="col-md-6">
                        <h5 class="pt-4 pb-3">List Group</h5>
                        <ul class="list-group">
                            <li class="list-group-item">Cras justo odio</li>
                            <li class="list-group-item">Dapibus ac facilisis in</li>
                            <li class="list-group-item">Morbi leo risus</li>
                            <li class="list-group-item">Porta ac consectetur ac</li>
                            <li class="list-group-item">Vestibulum at eros</li>
                        </ul>
                    </div>
                    <div class="col-md-6">
                        <h5 class="pt-4 pb-3">Active items</h5>
                        <ul class="list-group">
                            <li class="list-group-item active">Cras justo odio</li>
                            <li class="list-group-item">Dapibus ac facilisis in</li>
                            <li class="list-group-item">Morbi leo risus</li>
                            <li class="list-group-item">Porta ac consectetur ac</li>
                            <li class="list-group-item">Vestibulum at eros</li>
                        </ul>
                    </div>
                    <div class="col-md-6 my-3">
                        <h5 class="pt-4 pb-3">Disabled items</h5>
                        <ul class="list-group">
                            <li class="list-group-item disabled">Cras justo odio</li>
                            <li class="list-group-item">Dapibus ac facilisis in</li>
                            <li class="list-group-item">Morbi leo risus</li>
                            <li class="list-group-item">Porta ac consectetur ac</li>
                            <li class="list-group-item">Vestibulum at eros</li>
                        </ul>
                    </div>
                    <div class="col-md-6 my-3">
                        <h5 class="pt-4 pb-3">Flush</h5>
                        <ul class="list-group list-group-flush">
                            <li class="list-group-item">Cras justo odio</li>
                            <li class="list-group-item">Dapibus ac facilisis in</li>
                            <li class="list-group-item">Morbi leo risus</li>
                            <li class="list-group-item">Porta ac consectetur ac</li>
                            <li class="list-group-item">Vestibulum at eros</li>
                        </ul>
                    </div>
                    <div class="col-md-6">
                        <h5 class="pt-4 pb-3">Contextual Classes</h5>
                        <ul class="list-group">
                            <li class="list-group-item">Dapibus ac facilisis in</li>
                            <li class="list-group-item list-group-item-primary">This is a primary list group item</li>
                            <li class="list-group-item list-group-item-secondary">This is a secondary list group item</li>
                            <li class="list-group-item list-group-item-success">This is a success list group item</li>
                            <li class="list-group-item list-group-item-danger">This is a danger list group item</li>
                            <li class="list-group-item list-group-item-warning">This is a warning list group item</li>
                            <li class="list-group-item list-group-item-info">This is a info list group item</li>
                            <li class="list-group-item list-group-item-light">This is a light list group item</li>
                            <li class="list-group-item list-group-item-dark">This is a dark list group item</li>
                        </ul>
                    </div>
                    <div class="col-md-6 mt-md-0 mt-4">
                        <h5 class="pt-4 pb-3">With Badges</h5>
                        <ul class="list-group">
                            <li class="list-group-item d-flex justify-content-between align-items-center">
                                Cras justo odio
                                <span class="badge badge-primary badge-pill">14</span>
                            </li>
                            <li class="list-group-item d-flex justify-content-between align-items-center">
                                Dapibus ac facilisis in
                                <span class="badge badge-primary badge-pill">2</span>
                            </li>
                            <li class="list-group-item d-flex justify-content-between align-items-center">
                                Morbi leo risus
                                <span class="badge badge-primary badge-pill">1</span>
                            </li>
                        </ul>
                    </div>
                </div>
                <h4 class="pt-4 pb-3 mt-sm-5 mt-3">Color</h4>
                <div class="row">
                    <div class="col-md-6">
                        <h5 class="my-4">Text color</h5>
                        <p class="text-primary mb-2">.text-primary</p>
                        <p class="text-secondary mb-2">.text-secondary</p>
                        <p class="text-success mb-2">.text-success</p>
                        <p class="text-danger mb-2">.text-danger</p>
                        <p class="text-warning mb-2">.text-warning</p>
                        <p class="text-info mb-2">.text-info</p>
                        <p class="text-light bg-dark mb-2">.text-light</p>
                        <p class="text-dark mb-2">.text-dark</p>
                        <p class="text-muted mb-2">.text-muted</p>
                        <p class="text-white bg-dark">.text-white</p>
                    </div>
                    <div class="col-md-6">
                        <h5 class="my-4">Anchors with the provided hover and focus states.</h5>
                        <p>
                            <a href="#" class="text-primary">Primary link</a>
                        </p>
                        <p class="mb-2">
                            <a href="#" class="text-secondary">Secondary link</a>
                        </p>
                        <p class="mb-2">
                            <a href="#" class="text-success">Success link</a>
                        </p>
                        <p class="mb-2">
                            <a href="#" class="text-danger">Danger link</a>
                        </p>
                        <p class="mb-2">
                            <a href="#" class="text-warning">Warning link</a>
                        </p>
                        <p class="mb-2">
                            <a href="#" class="text-info">Info link</a>
                        </p>
                        <p>
                            <a href="#" class="text-light bg-dark">Light link</a>
                        </p>
                        <p class="mb-2">
                            <a href="#" class="text-dark">Dark link</a>
                        </p>
                        <p class="mb-2">
                            <a href="#" class="text-muted">Muted link</a>
                        </p>
                        <p>
                            <a href="#" class="text-white bg-dark">White link</a>
                        </p>
                    </div>
                </div>
            </div>
        </div>
        <!-- //typo container -->
    </section>
    <!-- //typography -->
@endsection

