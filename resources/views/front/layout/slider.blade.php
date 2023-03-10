<div class="slider" style="background-image: url({{asset('front/uploads/banner5.jpg')}})">
            <div class="bg"></div>
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <div class="item">
                            <div class="text">
                                <h2>{{$PageHomeItem->heading}}</h2>
                                <p>
                                {{$PageHomeItem->text}}.
                                </p>
                            </div>
                            <div class="search-section">
                                <form action="jobs.html" method="post">
                                    <div class="inner">
                                        <div class="row">
                                            <div class="col-lg-3">
                                                <div class="form-group">
                                                    <input
                                                        type="text"
                                                        name=""
                                                        class="form-control"
                                                        placeholder="{{$PageHomeItem->job_title}}"
                                                    />
                                                </div>
                                            </div>
                                            <div class="col-lg-3">
                                                <div class="form-group">
                                                    <select
                                                        name=""
                                                        class="form-select select2"
                                                    >
                                                        <option value="">
                                                        {{$PageHomeItem->job_location}}
                                                        </option>
                                                        <option value="">
                                                            Australia
                                                        </option>
                                                        <option value="">
                                                            Bangladesh
                                                        </option>
                                                        <option value="">
                                                            Canada
                                                        </option>
                                                        <option value="">
                                                            China
                                                        </option>
                                                        <option value="">
                                                            India
                                                        </option>
                                                        <option value="">
                                                            United Kingdom
                                                        </option>
                                                        <option value="">
                                                            United States
                                                        </option>
                                                    </select>
                                                </div>
                                            </div>
                                            <div class="col-lg-3">
                                                <div class="form-group">
                                                    <select
                                                        name=""
                                                        class="form-select select2"
                                                    >
                                                        <option value="">
                                                        {{$PageHomeItem->job_category}}
                                                        </option>
                                                        <option value="">
                                                            Accounting
                                                        </option>
                                                        <option value="">
                                                            Customer Support
                                                        </option>
                                                        <option value="">
                                                            Web Design
                                                        </option>
                                                        <option value="">
                                                            Web Development
                                                        </option>
                                                    </select>
                                                </div>
                                            </div>
                                            <div class="col-lg-3">
                                                <button
                                                    type="submit"
                                                    class="btn btn-primary"
                                                >
                                                    <i
                                                        class="fas fa-search"
                                                    ></i>
                                                    {{$PageHomeItem->search}}
                                                </button>
                                            </div>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
