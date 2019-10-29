   <div class="modal-body">
     <div class="table-responsive">
                    <table class="table align-items-center">

                                <thead class="thead-light">
                                <tr>
                                    <th scope="col">Package Name</th>
                                    <th scope="col">Number Of Coins</th>
                                    <th scope="col">BTC Spent</th>
                                    <th scope="col">Date</th>
                                    <th scope="col"></th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($purchases as $key => $purchase)
                                <tr>
                                    <td>
                                        <?php echo $purchase->packagename ?>
                                    </td>
                                     <td>
                                        <?php echo $purchase->noofcoins ?>
                                    </td>
                                     <td>
                                        <?php echo $purchase->BTCSpent ?>
                                     </td>
                                     <td>
                                        <?php echo $purchase->Date ?>
                                    </td>
                                @endforeach
                        

                        </tr>
                            </tbody>
                            </table>
                        </div>
