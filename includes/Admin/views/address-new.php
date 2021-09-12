<div class="wrap">
    <h1 class="wp-heading-inline"><?php _e('Address Book','wp-academy');?></h1>
   
    <form action="" method="post">
        <table class="form-table">
            <tbody>
                <tr>
                    <th scope="row">
                        <label for="name"><?php _e('Name','wp-academy');?></label>
                    </th>
                    <td>
                    <input type="text" name="name" id="name" class="regular-text" value="">
                    </td>
                </tr>

                <tr>
                    <th scope="row">
                        <label for="address"><?php _e('Address','wp-academy');?></label>
                    </th>
                    <td>
                        <textarea name="address" id="address" class="regular-text"></textarea>
                    </td>
                </tr>

                <tr>
                    <th scope="row">
                        <label for="phone"><?php _e('Phone','wp-academy');?></label>
                    </th>
                    <td>
                    <input type="text" name="phone" id="phone" class="regular-text" value="">
                    </td>
                </tr>
                
            </tbody>
        </table>
        <?php wp_nonce_field('new-address');?>
        <?php submit_button(__('Add Address','wp-academy'), 'primary', 'submit_address');?>
    </form>
</div>