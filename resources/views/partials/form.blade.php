                      <div class="form-group">
                            {!! Form::label('programe name', 'Program Name') !!}
                            {!! Form::text('name', null, ['class' => 'form-control']) !!}
                      </div>
                      <div class="form-group">
                            
                            {!! Form::label('textarea', 'Program Intro') !!}
                            {!! Form::textarea('program_intro', null, ['class' => 'form-control','rows' => '4']) !!}
                      </div>
                        
                      <div class="form-group">
                            {!! Form::label('how to', 'How to Apply') !!}
                            {!! Form::textarea('program_step' , null, ['class' => 'form-control','rows' => '4']) !!}
                      </div>

                      <div class="form-group">
                            {!! Form::label('news and update', 'News and Update') !!}
                            {!! Form::textarea('program_news' , null, ['class' => 'form-control','rows' => '4']) !!}
                      </div>

                      <div class="form-group">
                            {!! Form::label('image', 'Image') !!}
                            {!! Form::file('program_image') !!} 
                      </div>
                      <div class='form-group'>
                      {!! Form::submit($submitButtonText, ['class' => 'btn btn-lg btn-success form-control']) !!}
                      </div>                      
                            


    
                      
                            