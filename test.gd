extends CharacterBody2D

@export var heldItem = "none"
var tileMap : TileMap
var player : CharacterBody2D
var walkSpeed
var lastDirection : Vector2
var animationPlayer : AnimationPlayer

func _ready():
    tileMap = get_node("../TileMap")
    player = get_node(".")
    animationPlayer = $Sprite.get_node("AnimationPlayer")

func _process(delta):
    var PlayerMap = tileMap.local_to_map(player.position)
    walkSpeed = tileMap.get_cell_tile_data(0, PlayerMap).get_custom_data("WalkSpeed")
    
    print_debug(velocity)
    
    var direction = Input.get_vector("moveLeft", "moveRight", "moveUp", "moveDown")
    velocity = direction * walkSpeed * 10

    if velocity.normalized().x > 0 || velocity.normalized().y > 0:	
        if direction.x < 0:
            animationPlayer.play("walk left")
            lastDirection = Vector2.LEFT
        elif direction.x > 0:
            animationPlayer.play("walk right")
            lastDirection = Vector2.RIGHT
        elif direction.y < 0:
            animationPlayer.play("walk up")
            lastDirection = Vector2.UP
        elif direction.y > 0:
            animationPlayer.play("walk down")
            lastDirection = Vector2.DOWN
    else:
        if lastDirection == Vector2.LEFT:
            animationPlayer.play("idle left")
        elif lastDirection == Vector2.RIGHT:
            animationPlayer.play("idle right")
        elif lastDirection == Vector2.UP:
            animationPlayer.play("idle up")
        elif lastDirection == Vector2.DOWN:
            animationPlayer.play("idle down")


    print_debug(velocity)
    print_debug(move_and_slide())
    move_and_slide()
