@extends( 'layout.dashboard' )

@section( 'layout.dashboard.body' )
<div>
    @include( '../common/dashboard-header' )
    <div id="dashboard-content" class="px-4">
        <div class="page-inner-header mb-4">
            <h3 class="text-3xl text-gray-800 font-bold">{{ __( 'Managing Customers Groups' ) }}</h3>
            <p class="text-gray-600">{{ __( 'Create groups to assign customers' ) }}</p>
        </div>
        <ns-crud 
            src="{{ url( 'api/nexopos/v4/crud/ns.customers-groups' ) }}" 
            create-url="{{ url( 'dashboard/customers/groups/create' ) }}"
            id="crud-table-body">
            <template v-slot:bulk-label>{{ __( 'Bulk Actions' ) }}</template>
        </ns-crud>
    </div>
</div>
@endsection