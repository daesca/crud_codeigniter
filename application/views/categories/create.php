<h2>Crear categoria</h2>

<?php echo form_open('categories/create/store'); ?>
    <label for="title">Titulo</label><br>
    <input type="text" id="title" name="title">
    <?php echo form_error('title', '<span class="error">','</span>'); ?>
<br><br>
    <label for="description">Description</label><br>
    <textarea name="description" id="description"></textarea>
    <?php echo form_error('description', '<span class="error">','</span>'); ?>
    <div>
        <button>Guardar</button>
        <?php echo anchor('categories/main/index', 'Atras'); ?>
    </div>
</form>