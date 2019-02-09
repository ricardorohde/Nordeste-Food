<div class="dialog">
    <?php if (isset($erros)): ?>
        <div class="error">
            <p>
                <span class="ui-icon ui-icon-alert"></span>
                <strong>Alerta:</strong>
                <?php echo $erros ?>
            </p>
        </div>
    <?php endif; ?>

</div>
<header id="head">
    <h1>Atualizar Prato</h1>
</header>

<?php echo form_open_multipart('') ?>
<fieldset class="grid_6 alpha">
    <ul class="form-list">
        <li>
            <label for="titulo">Categoria <em>*</em></label>
            <select name="pra_prc_id" id="selCategoria"  required="required">
                <option value="">Selecione uma categoria</option>
                <?php
                if (count($categorias) > 0):
                    foreach ($categorias as $categoria):
                        ?>
                        <option value="<?php echo $categoria->prc_id ?>" <?php echo set_selecionado($prato->pra_prc_id, $categoria->prc_id, 'selected') ?>><?php echo $categoria->prc_nome ?></option>
                        <?php
                    endforeach;
                endif;
                ?>
            </select>
        </li>        
    </ul>
</fieldset>
<fieldset class="grid_4 alpha">
    <ul class="form-list">
        <li>
            <label for="titulo">Nome <em>*</em></label>
            <input type="text" name="pra_nome" id="titulo" value="<?php echo $prato->pra_nome ?>" required="required" />
        </li>            
    </ul>
</fieldset>
<fieldset class="grid_4 alpha">
    <ul class="form-list">
        <li>
            <label for="titulo">Valor <em>*</em></label>
            <input type="text" name="pra_valor" id="titulo" class="preco" value="<?php echo number_format($prato->pra_valor, 2, ',', '.') ?>" required="required" />
        </li>            
    </ul>
</fieldset>
<fieldset class="grid_9 alpha">
    <ul class="form-list">
        <li>
            <label for="Descricao">Descrição <em>*</em></label>
            <textarea name="pra_descricao" class="ckeditor" rows="" cols=""><?php echo $prato->pra_descricao ?></textarea>
        </li>
    </ul>
</fieldset>

<br class="clear" />

<input type="submit" value="Enviar formulário"/>
</form>
