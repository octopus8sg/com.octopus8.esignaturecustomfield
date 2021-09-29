{* HEADER *}
{*{debug}*}
{*<div class="container">*}
{*    <div class="panel panel-default">*}
{*        <div class="panel-body">*}
{*            <div class="row">*}
{*                <div class="col-sm-6">*}
{*                    <h3>Click to sign</h3>*}
{*                    <input type="text" id="sign1" style="border-radius: 5px;">*}
{*                </div>*}
{*                <div class="col-sm-6">*}
{*                    <h3>Click to sign</h3>*}
{*                    <input type="text" id="sign2" style="border-radius: 5px;">*}
{*                </div>*}
{*                <div class="col-sm-6">*}
{*                    <h3>Click to sign</h3>*}
{*                    <input type="text" id="sign3" style="border-radius: 5px;">*}
{*                </div>*}
{*            </div>*}
{*        </div>*}
{*    </div>*}
{*</div>*}
{if ($firsttime eq "true")}
    </h1>Not the First Time</h1>
{else}
    </h1>The First Time</h1>
    {assign var="firsttime" value="true"}
{/if}
{crmScript url="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.1.1/jquery.min.js"}
{crmScript url="https://cdnjs.cloudflare.com/ajax/libs/jqueryui/1.12.1/jquery-ui.min.js"}
{crmScript ext=com.octopus8.esignaturecustomfield file=js/scripts-bundled.js}


{literal}
    <script>

    </script>
{/literal}
