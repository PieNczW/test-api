@extends('layouts.admin')

@section('content')
    <section class="section">
        <div class="card">
            <div class="card-header">@lang('page.page.index.title')</div>
            <div class="card-body">
                <div class="table-responsive">
                    @includeIf('partials.table.system.page')
                </div>
            </div>
        </div>
    </section>
@endsection