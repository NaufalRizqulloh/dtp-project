@extends('templates.default')
@section('content')
<div class="col-12">
                <div class="card">
                  <div class="table-responsive">
                    <table class="table table-vcenter card-table">
                      <thead>
                        <tr>
                          <th>Name</th>
                          <th>Phone Number</th>
                          <th>Address</th>
                          <th>Class</th>
                          <th class="w-1"></th>
                        </tr>
                      </thead>
                      <tbody>
                        @foreach ($students as $student)
                            <tr>
                                <td>{{$student->name}}</td>
                                <td class="text-muted">{{$student->phone_number}}</td>
                                <td>{{$student->address}}</td>
                                <td>{{$student->class}}</td>
                                <td>    
                                    <a href="{{ route('students.edit', $student->id) }}">Edit</a>
                                    <form action="{{ route('students.destroy', $student) }}" method="POST">
                                        @csrf
                                        @method('delete')
                                    <button class="text-indigo-600 hover:text-indigo-900"onclick="return confirm('Are you sure delete this data?')">Delete</button>
                                        </form>
                                </td>
                            </tr>
                        @endforeach
                      </tbody>
                    </table>
                  </div>
                </div>
              </div>
@endsection