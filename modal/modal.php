<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Новая заявка</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <form action="../DataBase/create_application.php" method="POST">
          <div class="form-group">
            <label for="recipient-name" class="col-form-label">Услуга:</label>
            <input type="text" class="form-control" id="recipient-name" name="service_name">
          </div>
          <div class="form-group">
            <label for="message-text" class="col-form-label">Комментарий:</label>
            <textarea placeholder="Опишите поломку..." class="form-control" id="message-text" name="comment"></textarea>
          </div>
          <div class="form-group">
            <label for="contacts" class="col-form-label">Как нам с вами связаться?:</label>
            <textarea placeholder="Номер и/или электронная почта" class="form-control" id="contacts" name="contacts"></textarea>
          </div>
        
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Закрыть</button>
        <button type="submit" class="btn btn-primary">Отправить заявку</button>
      </div>
      </form>
    </div>
  </div>
</div>
