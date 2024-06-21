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
              </div>
              <div class="card-body">
                <table id="servicesTable" class="table table-bordered table-hover">
                  <thead>
                    <tr>
                      <th>#</th>
                      <th>Service Name</th>
                      <th>Client Name</th>
                      <th>Client Email</th>
                      <th>Client Contact</th>
                      <th>Service Status</th>
                      <th>Comment</th>
                    </tr>
                  </thead>
                  <tbody>
                    @php
                        $i = 1;
                        $j = 1;
                    @endphp
                    @foreach ($appointments as $appointment)
                    <tr>
                        <td>{{ $i++ }}</td>
                        <td>{{ $appointment->service->name }}</td>
                        <td>{{ $appointment->name }}</td>
                        <td>{{ $appointment->email }}</td>
                        <td>{{ $appointment->phone }}</td>
                        <td>{{ $appointment->status }}</td>
                        <td>{{ $appointment->comment }}</td>
                    </tr>
                    @endforeach

                    <!-- Additional rows can be added here -->
                  </tbody>
                </table>
              </div>
            </div>
            <!-- New Table for Service Status -->
            <div class="card">
              <div class="card-header">
                <h3 class="card-title">Service Status Update</h3>
                @if (session('success'))
                    <div class="alert alert-success">{{ session('success') }}</div>
                @endif
              </div>
              <div class="card-body">
                <table id="serviceStatusTable" class="table table-bordered table-hover">
                  <thead>
                    <tr>
                      <th>#</th>
                      <th>Service Name</th>
                      <th>Client Name</th>
                      <th>Status</th>
                      <th>Admin Comment</th>
                        <th>User Review</th>
                    </tr>
                  </thead>
                  <tbody>
                    @foreach ($appointments as $appointment)
                    <tr>
                      <td>{{ $loop->iteration }}</td>
                      <td>{{ $appointment->service->name }}</td>
                      <td>{{ $appointment->name }}</td>
                      <td>
                        <select wire:model="statuses.{{ $appointment->id }}">
                            <option value="reviewing">Reviewing</option>
                            <option value="inprogress">In Progress</option>
                            <option value="completed">Completed</option>
                        </select>
                    </td>
                    <td>
                        <input type="text" wire:model="comments.{{ $appointment->id }}">
                    </td>
                    <td>{{ $appointment->user_comment }}</td>
                    </tr>
                    @endforeach

                    <!-- Additional rows can be added here -->
                  </tbody>
                </table>
                <button class="btn btn-primary" wire:click="update">Update</button>
              </div>
            </div>
            <!-- Client Messages -->
            <div class="card">
              <div class="card-header">
                <h3 class="card-title">Client Messages</h3>
              </div>
              <div class="card-body">
                <table id="messagesTable" class="table table-bordered table-striped">
                  <thead>
                    <tr>
                      <th>Message ID</th>
                      <th>Client Name</th>
                      <th>Email</th>
                      <th>Message</th>
                    </tr>
                  </thead>
                  <tbody>
                    <tr>
                      <td>001</td>
                      <td>John Doe</td>
                      <td>john.doe@example.com</td>
                      <td>I'm interested in your web development services.</td>
                    </tr>
                    <tr>
                      <td>002</td>
                      <td>Jane Smith</td>
                      <td>jane.smith@example.com</td>
                      <td>Can you provide more details about your SEO packages?</td>
                    </tr>
                    <!-- Additional rows can be added here -->
                  </tbody>
                </table>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
  </div>
