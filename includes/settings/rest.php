<?php $token = get_option('sola_t_token'); ?>
<table class="form-table wp-list-table widefat striped pages">
    <tbody>
        <tr>
            <td width="200">Secret Token:</td>
            <td><input type="text" style="width:300px" disabled='true' value="<?php echo $token; ?>" readonly>
            </td>
        </tr>

        <tr>
	        <td width="200">Supported API Calls:</td>
	        <td><code>/wp-json/sola_t/v1/get_all_testimonials</code> 
	            <code>GET, POST</code> 
	        </td>
	    </tr>

        <?php do_action( 'sola_t_endpoints', false ); ?>

        <tr>
            <td width="200">API Response Codes:</td>
            <td><code>200</code> 
                <code>Success</code> 
            </td>
        </tr>
        <tr>
            <td width="200"></td>
            <td><code>400</code> 
                <code>Bad Request</code> 
            </td>
        </tr>
        <tr>
            <td width="200"></td>
            <td><code>401</code> 
                <code>Unauthorized</code> 
            </td>
        </tr>
        <tr>
            <td width="200"></td>
            <td><code>403</code> 
                <code>Forbidden</code> 
            </td>
        </tr>
        <tr>
            <td width="200"></td>
            <td><code>404</code>
                <code>Content Not Found</code> 
            </td>
        </tr>
    </tbody>
</table>