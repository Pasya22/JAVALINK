transaksi-content" class="transaksi-content">
        <div class="container-transaksiadd">
          <a href="#" onclick="modtransaksi()" class="transaksiadd-add">
            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-plus-circle" viewBox="0 0 16 16">
              <path d="M8 15A7 7 0 1 1 8 1a7 7 0 0 1 0 14zm0 1A8 8 0 1 0 8 0a8 8 0 0 0 0 16z"/>
              <path d="M8 4a.5.5 0 0 1 .5.5v3h3a.5.5 0 0 1 0 1h-3v3a.5.5 0 0 1-1 0v-3h-3a.5.5 0 0 1 0-1h3v-3A.5.5 0 0 1 8 4z"/>
            </svg> Add New Transaksi
          </a>
        </div>
            <table class="tabel-transaksi">
              <thead class="thead-transaksi">
                <tr>
                  <th>No</th>
                  <th>Kode Transaksi</th>
                  <th>Pembayaran</th>
                  <th>Harga</th>
                  <th>Diskon</th>
                  <th>Negara</th>
                  <th>Status</th>
                  <th>Action</th>
                </tr>
              </thead>
              <tbody class="tbody-transaksi">
                <tr>
                  <td><div>001</div></td>
                  <td><div>Consectetur adipiscing elit</div></td>
                  <td><div>Consectetur adipiscing elit</div></td>
                  <td><div>Consectetur adipiscing elit</div></td>
                  <td><div>dassadasdassadsdassssdssa</div></td>
                  <td><div>dassadasdassadsdassssdssa</div></td>
                  <td><div>https://www.youtube.com/results?search_query=cara+buat+tabel+di+html</div></td>
                  <td><div>
                    <div class="con-tabel-transaksi">
                      <div class="edit-tabeltransaksi" onclick="clickedittransaksi()">Edit</div>
                      <div class="delete-tabeltransaksi" onclick="clickdeletetransaksi()">Delete</div>
                    </div>
                  </div></td>
                </tr>
                <tr>
                  <td><div>002</div></td>
                  <td><div>Consectetur adipiscing elit</div></td>
                  <td><div>Consectetur adipiscing elit</div></td>
                  <td><div>Consectetur adipiscing elit</div></td>
                  <td><div>dassadasdassadsdassssdssa</div></td>
                  <td><div>dassadasdassadsdassssdssa</div></td>
                  <td><div>www.example.com</div></td>
                  <td><div>
                    <div class="con-tabel-transaksi">
                      <div class="edit-tabeltransaksi" onclick="clickedittransaksi()">Edit</div>
                      <div class="delete-tabeltransaksi" onclick="clickdeletetransaksi()">Delete</div>
                    </div>
                  </div></td>
                <tr>
                  <td><div>003</div></td>
                  <td><div>Consectetur adipiscing elit</div></td>
                  <td><div>Consectetur adipiscing elit</div></td>
                  <td><div>Consectetur adipiscing elit</div></td>
                  <td><div>dassadasdassadsdassssdssa</div></td>
                  <td><div>dassadasdassadsdassssdssa</div></td>
                  <td><div>www.example.com</div></td>
                  <td><div>
                    <div class="con-tabel-transaksi">
                      <div class="edit-tabeltransaksi" onclick="clickedittransaksi()">Edit</div>
                      <div class="delete-tabeltransaksi" onclick="clickdeletetransaksi()">Delete</div>
                    </div>
                  </div></td>
                </tr>
                <tr>
                  <td><div>004</div></td>
                  <td><div>Consectetur adipiscing elit</div></td>
                  <td><div>Consectetur adipiscing elit</div></td>
                  <td><div>Consectetur adipiscing elit</div></td>
                  <td><div>dassadasdassadsdassssdssa</div></td>
                  <td><div>dassadasdassadsdassssdssa</div></td>
                  <td><div>www.example.com</div></td>
                  <td><div>
                    <div class="con-tabel-transaksi">
                      <div class="edit-tabeltransaksi" onclick="clickedittransaksi()">Edit</div>
                      <div class="delete-tabeltransaksi" onclick="clickdeletetransaksi()">Delete</div>
                    </div>
                  </div></td>
                </tr>
                <tr>
                  <td><div>005</div></td>
                  <td><div>Consectetur adipiscing elit</div></td>
                  <td><div>Consectetur adipiscing elit</div></td>
                  <td><div>Consectetur adipiscing elit</div></td>
                  <td><div>dassadasdassadsdassssdssa</div></td>
                  <td><div>dassadasdassadsdassssdssa</div></td>
                  <td><div>www.example.com</div></td>
                  <td><div>
                    <div class="con-tabel-transaksi">
                      <div class="edit-tabeltransaksi" onclick="clickedittransaksi()">Edit</div>
                      <div class="delete-tabeltransaksi" onclick="clickdeletetransaksi()">Delete</div>
                    </div>
                  </div></td>
                </tr>
              </tbody>
            </table>
      </div>
       <!-- ---------------------------------alert modal transaksi--------------------------------         -->
    <div class="transaksi" id="modtransaksi">
      <div class="container-transaksi" style="display: none;" id="transaksi">
        <div class="con-modtransaksi">
            <svg onclick="modtransaksi2()" xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-x-circle-fill" viewBox="0 0 16 16">
              <path d="M16 8A8 8 0 1 1 0 8a8 8 0 0 1 16 0zM5.354 4.646a.5.5 0 1 0-.708.708L7.293 8l-2.647 2.646a.5.5 0 0 0 .708.708L8 8.707l2.646 2.647a.5.5 0 0 0 .708-.708L8.707 8l2.647-2.646a.5.5 0 0 0-.708-.708L8 7.293 5.354 4.646z"/>
            </svg>
            <div class="input1transaksi">
              <p>Kode Transaksi</p>
              <input class="in1transaksi" type="text">
            </div>
            <div class="input3transaksi">
              <p>Pembayaran</p>
              <select name="" id="">
                <option value="">Shopepay</option>
                <option value="">OVO</option>
                <option value="">GRAB</option>
                <option value="">Debit</option>
              </select>
            </div>
            <div class="input4transaksi">
              <p>Harga</p>
              <input type="text">
            </div>
            <div class="input5transaksi">
              <p>Diskon</p>
              <input type="text">
            </div>
            <div class="input6transaksi">
              <p>Negara</p>
              <select name="" id="">
                <option value="">Indonesia</option>
                <option value="">Malaysia</option>
                <option value="">Thailand</option>
                <option value="">Jepang</option>
              </select>
            </div>
            <div class="input7transaksi">
              <p>Status</p>
              <select name="" id="">
                <option value="">Lunas</option>
                <option value="">Belum Lunas</option>
              </select>
            </div>
            <div class="button-linktransaksi">
              <button type="submit" class="but-linktransaksi">Submit</button>
            </div>
          </div>
        </div>
      </div>
    </div>
    <!-- ---------------------------------end alert modal transaksi--------------------------------         -->

    <!-- ----------------------------------alert edit transaksi-------------------------------------- -->

    <div class="clickedittransaksi" id="clicketransaksi">
      <div class="container-clickedittransaksi" style="display: none;" id="clickeditransaksi">
        <div class="con-clickedittransaksi">
            <svg onclick="clickedittransaksi2()" xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-x-circle-fill" viewBox="0 0 16 16">
              <path d="M16 8A8 8 0 1 1 0 8a8 8 0 0 1 16 0zM5.354 4.646a.5.5 0 1 0-.708.708L7.293 8l-2.647 2.646a.5.5 0 0 0 .708.708L8 8.707l2.646 2.647a.5.5 0 0 0 .708-.708L8.707 8l2.647-2.646a.5.5 0 0 0-.708-.708L8 7.293 5.354 4.646z"/>
            </svg>
            <h2 class="eddtransaksi">Edit</h2>
            <div class="input1-clickedittransaksi">
              <p>Kode Transaksi</p>
              <input class="in1-clickedittransaksi" type="text">
            </div>
            <div class="input3-clickedittransaksi">
              <p>Pembayaran</p>
              <select name="" id="">
                <option value="">Shopepay</option>
                <option value="">OVO</option>
                <option value="">GRAB</option>
                <option value="">Debit</option>
              </select>
            </div>
            <div class="input4-clickedittransaksi">
              <p>Harga</p>
              <input type="text">
            </div>
            <div class="input5-clickedittransaksi">
              <p>Diskon</p>
              <input type="text">
            </div>
            <div class="input6-clickedittransaksi">
              <p>Negara</p>
              <select name="" id="">
                <option value="">Indonesia</option>
                <option value="">Malaysia</option>
                <option value="">Thailand</option>
                <option value="">Jepang</option>
              </select>
            </div>
            <div class="input7-clickedittransaksi">
              <p>Status</p>
              <select name="" id="">
                <option value="">Lunas</option>
                <option value="">Belum Lunas</option>
              </select>
            </div>
            <div class="button-link-clickedittransaksi">
              <button type="submit" class="but-link-clickedittransaksi">Submit</button>
            </div>
          </div>
        </div>
      </div>
    </div>

    <!-- ----------------------------------end alert edit transaksi-------------------------------------- -->

    <!-- ----------------------------------alert delet transaksi-------------------------------------- -->

    <div class="clickdeletetransaksi" id="clickdtransaksi">
      <div class="container-clickdeletetransaksi" style="display: none;" id="clickdeltransaksi">
        <div class="con-clickdeletetransaksi">
            <svg onclick="clickdeletetransaksi2()" xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-x-circle-fill" viewBox="0 0 16 16">
              <path d="M16 8A8 8 0 1 1 0 8a8 8 0 0 1 16 0zM5.354 4.646a.5.5 0 1 0-.708.708L7.293 8l-2.647 2.646a.5.5 0 0 0 .708.708L8 8.707l2.646 2.647a.5.5 0 0 0 .708-.708L8.707 8l2.647-2.646a.5.5 0 0 0-.708-.708L8 7.293 5.354 4.646z"/>
            </svg>
            <h2 class="delltransaksi">Delete This Data</h2>
            <div class="con-delltransaksi">
              <div class="tombol-del-ytransaksi">Yes</div>
              <div class="tombol-del-ntransaksi">No</div>
            </div>
          </div>
        </div>
      </div>
    </div>

    <!-- ----------------------------------end alert delete transaksi-------------------------------------- -->
