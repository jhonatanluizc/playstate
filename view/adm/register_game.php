<div class="container">

    <div style="text-align:center;" class="card-header">Cadastrar Game</div>
    <div class="card-body">
        <form enctype="multipart/form-data" action="game.php?op=register" method="post">

            <!-- id	title description value	genre discount quantity	images-->

            <div class="form-group">
                <div class="form-row">
                    <div class="col-sm-12 col-lg-12 mt-1">
                        <div class="form-label-group">
                            <input name="title" id="title" placeholder="Título do Game" type="text" class="form-control" required autofocus="autofocus">
                            <label for="title">Título do Game</label>
                        </div>
                    </div>
                </div>
            </div>
            <div class="form-group">
                <div class="form-row ">
                    <div class="col-sm-12 col-lg-6 mt-1">
                        <div class="form-label-group">
                            <input name="genre" id="genre" placeholder="Genero do Game (separado por , )" type="text" class="form-control" required>
                            <label for="genre">Genero do Game (separado por , )</label>
                        </div>
                    </div>

                    <div class="col-sm-12 col-lg-6 mt-1">
                        <select name="console" id="console" placeholder="Console" class="form-control" style="height: 50px" required>
                            <option value="PlayStation 4">PlayStation 4</option>
                            <option value="Xbox One">Xbox One</option>
                        </select>
                    </div>
                </div>
            </div>

            <div class="form-group">
                <div class="form-row">
                    <div class="col-md-12 col-lg-6 mt-1">
                        <div class="form-label-group">
                            <input name="value" id="value" placeholder="Preço Unitário" type="number" min="0" step="0.10" class="form-control" required>
                            <label for="value">Preço Unitário</label>
                        </div>
                    </div>
                    <div class="col-md-12 col-lg-6 mt-1">
                        <div class="form-label-group">
                            <select name="discount" id="discount" placeholder="Desconto" class="form-control" style="height: 50px" required>
                                <option value="0.00">0%</option>
                                <option value="0.05">5%</option>
                                <option value="0.10">10%</option>
                                <option value="0.15">15%</option>
                                <option value="0.20">20%</option>
                                <option value="0.25">25%</option>
                                <option value="0.30">30%</option>
                                <option value="0.35">35%</option>
                                <option value="0.40">40%</option>
                                <option value="0.45">45%</option>
                                <option value="0.50">50%</option>

                            </select>
                        </div>
                    </div>
                </div>
            </div>

            <div class="form-group">
                <div class="form-row">
                    <div class="col-md-12">
                        <div class="form-label-group">
                            <textarea name="description" id="description" placeholder="Descrição do Game" type="text" class="form-control" rows="5" required></textarea>
                        </div>
                    </div>
                </div>
            </div>


            <div class="form-group">
                <div class="form-row">
                    <div class="col-md-12">
                        <div class="form-label-group">
                            <input name="wallpaper" id="wallpaper" placeholder="Wallpaper (1920x720)" type="file" class="form-control" required accept="image/*">
                            <label for="wallpaper">Wallpaper (1920x720)</label>
                        </div>
                    </div>
                </div>
            </div>

            <br>

            <button class="btn btn-primary btn-block" type="submit">Cadastrar Game</button>
        </form>

    </div>

</div>