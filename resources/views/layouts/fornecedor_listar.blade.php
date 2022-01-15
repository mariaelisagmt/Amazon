@extends('templates.principal')
@section('title','Fornecedor')
@section('content')
        <div class="relative flex items-top justify-center min-h-screen bg-gray-100 dark:bg-gray-900 sm:items-center py-4 sm:pt-0">
            <div class="max-w-8xl mx-auto sm:px-8 lg:px-10">
                <div class="mt-8 bg-white dark:bg-gray-800 overflow-hidden shadow sm:rounded-lg">
                    <div class="grid grid-cols-3 md:grid-cols-3">
                        <div class="p-6">
                            <div class="flex items-center mb-4">
                                <svg style="color:gray" xmlns="http://www.w3.org/2000/svg" width="30" height="30"  stroke="currentColor"  class="bi bi-person" viewBox="0 0 16 16">
                                    <path d="M8 8a3 3 0 1 0 0-6 3 3 0 0 0 0 6zm2-3a2 2 0 1 1-4 0 2 2 0 0 1 4 0zm4 8c0 1-1 1-1 1H3s-1 0-1-1 1-4 6-4 6 3 6 4zm-1-.004c-.001-.246-.154-.986-.832-1.664C11.516 10.68 10.289 10 8 10c-2.29 0-3.516.68-4.168 1.332-.678.678-.83 1.418-.832 1.664h10z"/>
                                  </svg>
                               
                                <div class="ml-4 text-lg leading-7 font-semibold" style="color:gray">Fornecedores</div>
                            </div>

                            <div class="ml-1">
                                <div class="mt-2 text-gray-600 dark:text-gray-400">
                                    <table id="data_table" class="table table-striped">
                                        <thead>
                                            <tr>
                                                <th>ID</th>
                                                <th>Nome</th>
                                                <th>Endereço</th>
                                                <th>Bairro</th>
                                                <th>Número</th>
                                                <th>CEP</th>
                                                <th>Contato</th>
                                                <th>CNPJ</th>
                                                <th>Inscrição</th>
                                                <th>Telefone</th>
                                                <th class="text-center">Ações</th>
                                            </tr>
                                        </thead> 
                                        <tbody>
                                                @foreach ($fornecedores as $for)
                                                    <tr>
                                                        <td>{{$for->id}}</td>
                                                        <td>{{$for->fornecedor}}</td>
                                                        <td>{{$for->endereco}}</td>
                                                        <td>{{$for->bairro}}</td>
                                                        <td>{{$for->num}}</td>
                                                        <td>{{$for->cep}}</td>
                                                        <td>{{$for->contato}}</td>
                                                        <td>{{$for->cnpj}}</td>
                                                        <td>{{$for->insc}}</td>
                                                        <td>{{$for->tel}}</td>
                                                            <td class="text-center">
                                                                <button name="viewClinicBtn" id="viewClinicBtn" type="button"
                                                                    class="btn btn-success viewClinicBtn" data-toggle="modal" data-target="#viewClinic"
                                                                    data-id="">
                                                                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-eye-fill" viewBox="0 0 16 16">
                                                                        <path d="M10.5 8a2.5 2.5 0 1 1-5 0 2.5 2.5 0 0 1 5 0z"/>
                                                                        <path d="M0 8s3-5.5 8-5.5S16 8 16 8s-3 5.5-8 5.5S0 8 0 8zm8 3.5a3.5 3.5 0 1 0 0-7 3.5 3.5 0 0 0 0 7z"/>
                                                                      </svg>
                                                                    </button>
                                                                    <button name="editClinicBtn" type="button" class="btn btn-primary editClinicBtn"
                                                                    data-toggle="modal" data-target="#editClinic" data-id="">
                                                                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-pencil-fill" viewBox="0 0 16 16">
                                                                        <path d="M12.854.146a.5.5 0 0 0-.707 0L10.5 1.793 14.207 5.5l1.647-1.646a.5.5 0 0 0 0-.708l-3-3zm.646 6.061L9.793 2.5 3.293 9H3.5a.5.5 0 0 1 .5.5v.5h.5a.5.5 0 0 1 .5.5v.5h.5a.5.5 0 0 1 .5.5v.5h.5a.5.5 0 0 1 .5.5v.207l6.5-6.5zm-7.468 7.468A.5.5 0 0 1 6 13.5V13h-.5a.5.5 0 0 1-.5-.5V12h-.5a.5.5 0 0 1-.5-.5V11h-.5a.5.5 0 0 1-.5-.5V10h-.5a.499.499 0 0 1-.175-.032l-.179.178a.5.5 0 0 0-.11.168l-2 5a.5.5 0 0 0 .65.65l5-2a.5.5 0 0 0 .168-.11l.178-.178z"/>
                                                                    </svg>
                                                                </button>
                                                                <button id="deleteClinicBtn" type="button" class="btn btn-danger deleteClinicBtn"
                                                                data-toggle="modal" data-target="#deleteClinic" data-id=""
                                                                data-name="" data-url="">
                                                                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-trash-fill" viewBox="0 0 16 16">
                                                                        <path d="M2.5 1a1 1 0 0 0-1 1v1a1 1 0 0 0 1 1H3v9a2 2 0 0 0 2 2h6a2 2 0 0 0 2-2V4h.5a1 1 0 0 0 1-1V2a1 1 0 0 0-1-1H10a1 1 0 0 0-1-1H7a1 1 0 0 0-1 1H2.5zm3 4a.5.5 0 0 1 .5.5v7a.5.5 0 0 1-1 0v-7a.5.5 0 0 1 .5-.5zM8 5a.5.5 0 0 1 .5.5v7a.5.5 0 0 1-1 0v-7A.5.5 0 0 1 8 5zm3 .5v7a.5.5 0 0 1-1 0v-7a.5.5 0 0 1 1 0z"/>
                                                                      </svg>
                                                                    </button>
                                                                </td>
                                                        </tr>                                                    
                                                        @endforeach
                                                    
                                                </tbody>
                                    </table>                                            
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                </div>
            </div>
       @endsection