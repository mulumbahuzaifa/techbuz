<div>
    <style>
        /* Black background section */
        .black-background {
          background-color: #000;
          height: 6cm; /* Adjust as needed */
        }

        /* Make the page mobile responsive */
        @media (max-width: 768px) {
          .black-background {
            height: auto; /* Adjust for mobile */
          }
        }
      </style>
    <section class="content">
      <!-- Black background section -->
      <div class="black-background"></div>
      <div class="container-fluid">
        <div class="row">
          <div class="col-12">
            <!-- Services Applied For -->
            <div class="card">
              <div class="card-header">
                <h3 class="card-title">Services Applied For</h3>
                @if (session('success'))
                    <div class="alert alert-success">{{ session('success') }}</div>
                @endif
              </div>
              <div class="card-body">
                <table id="servicesTable" class="table table-bordered table-hover">
                  <thead>
                    <tr>
                        <th>#</th>
                        <th>Service Name</th>
                        <th>Status</th>
                        <th>Admin Comment</th>
                        <th>Your Review</th>
                    </tr>
                  </thead>
                  <tbody>
                    @foreach ($appointments as $appointment)
                        <tr>
                            <td>{{ $loop->iteration }}</td>
                            <td>{{ $appointment->service->name }}</td>
                            <td>{{ $appointment->status }}</td>
                            <td>{{ $appointment->comment }}</td>
                            <td>
                                <textarea wire:model.defer="user_comment.{{ $appointment->id }}"></textarea>
                                <button wire:click="submitComment({{ $appointment->id }})">Submit</button>
                            </td>
                        </tr>
                    @endforeach
                    <!-- Additional rows can be added here -->
                  </tbody>
                </table>
              </div>
            </div>
            <!-- Complaint Form -->
            {{-- <div class="card">
              <div class="card-header">
                <h3 class="card-title">File a Complaint</h3>
              </div>
              <div class="card-body">
                <form>
                  <div class="form-group">
                    <label for="serviceID">Service ID</label>
                    <input type="text" class="form-control" id="serviceID" placeholder="Enter Service ID">
                  </div>
                  <div class="form-group">
                    <label for="clientName">Client Name</label>
                    <input type="text" class="form-control" id="clientName" placeholder="Enter Client Name">
                  </div>
                  <div class="form-group">
                    <label for="complaint">Complaint</label>
                    <textarea class="form-control" id="complaint" rows="3" placeholder="Enter your complaint"></textarea>
                  </div>
                  <button type="submit" class="btn btn-primary">Submit</button>
                </form>
              </div>
            </div> --}}
          </div>
        </div>
      </div>
    </section>
  </div>
