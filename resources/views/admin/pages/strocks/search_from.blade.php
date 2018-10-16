
<div class="col-md-12">
    {!! Form::open(['class'=>'row order-srch-form', 'method' =>'post', 'url'=> action('StockManagement@search')]) !!} 
    
        <div class="form-group col-md-8">
            <input class="form-control" name="item" placeholder="Search by product name or description or price " type="text">
        </div>
        <div class="col-md-4">
            <button type="submit" class="btn btn-info btn-block">Search</button>
        </div>
    </form>
</div>





<div class="col-md-12">
    
    {!! Form::open(['class'=>'row order-srch-form', 'method' =>'post', 'url'=> action('StockManagement@searchByDate')]) !!} 
    
        <div class="form-group col-md-4">
            <div class="input-group date" id="d1">
                <input class="form-control" data-format="yyyy-MM-dd"  placeholder="Y-m-d" name="date1" type="text">
                <span class="input-group-addon">
                    <span class="glyphicon glyphicon-calendar"></span>
                </span>
            </div>
        </div>
        <div class="form-group col-md-4">
            <div class="input-group date" id="d2">
                <input class="form-control" data-format="yyyy-MM-dd"  placeholder="Y-m-d" name="date2" type="text">
                <span class="input-group-addon">
                    <span class="glyphicon glyphicon-calendar"></span>
                </span>
            </div>
        </div>
        
        <div class="col-md-4">
            <button type="submit" class="btn btn-info btn-block">Search</button>
        </div>
    </form>
</div>