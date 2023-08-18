@extends('admin.layouts.layout')

@section('content')
    <!-- Table with stripped rows -->
    <table class="table table-striped m-5">
        <thead>
            <tr>
                <th scope="col">#</th>
                <th scope="col">Nom de l'utilisateur</th>
                <th scope="col">Contenu</th>
                <th scope="col">Date</th>
                <th scope="col">Actions</th>
            </tr>
        </thead>
        <tbody>
            @forelse ($comments as $comment)
                <tr>
                    <th scope="row">{{ $comment->id }}</th>
                    <td>{{ $comment->user->name }}</td>
                    <td>{{ Str::limit($comment->content, 200, '...') }}</td>
                    <td>{{ $comment->created_at }}</td>
                    <td class="row">
                        <span class=" link-danger delete-link m-1" onclick="remove({{ $comment->id }})"
                            style="cursor: pointer;"
                            onclick='document.getElementById("delete{{ $comment->id }}").submit()'>Supprimer</span>
                    </td>
                    <form action="{{ route('comments.destroy', ['id' => $comment->id]) }}" id="delete{{ $comment->id }}"
                        method="post" hidden>
                        @csrf
                        @method('delete')
                    </form>
                </tr>
            @empty
                <tr>
                    <td class="row w-100 align-center m-3">
                        <p class="text-bold">Aucune réservation éfectuée</p>
                    </td>
                </tr>
            @endforelse
        </tbody>
    </table>
    <!-- End Table with stripped rows -->
@endsection
