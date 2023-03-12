<table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
    <thead>
    <tr class="text-center text-light bg-dark">
        <th>No</th>
        <th>Name</th>
        <th>Main category</th>
        <th>Description</th>
        <th>Update</th>
        <th>Delete</th>
    </tr>
    </thead>
    <tfoot>
    <tr class="text-center text-light bg-dark">
        <th>No</th>
        <th>Name</th>
        <th>Main category</th>
        <th>Description</th>
        <th>Update</th>
        <th>Delete</th>
    </tr>
    </tfoot>
    <tbody>
    @forelse($subCategories as $index => $item)
        <tr>
            <td class="text-center"></td>
            <td>{{ $item->name_sub_category }}</td>
            <td class="text-center">{{ $item->main_category }}</td>
            <td>{{ $item->description }}</td>
            <td class="text-center">
                <a href="">
                    <button class="btn btn-primary">
                        <i class="fa-solid fa-pen-to-square"></i>
                    </button>
                </a>
            </td>
            <td class="text-center">
                <a href="">
                    <button class="btn btn-danger">
                        <i class="fa-solid fa-trash"></i>
                    </button>
                </a>
            </td>
        </tr>
    @empty
    @endforelse
    </tbody>
</table>
