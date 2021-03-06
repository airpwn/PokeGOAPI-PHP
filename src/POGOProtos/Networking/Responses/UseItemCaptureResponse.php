<?php
// Generated by https://github.com/bramp/protoc-gen-php// Please include protocolbuffers before this file, for example:
//   require('protocolbuffers.inc.php');
//   require('POGOProtos/Networking/Responses/UseItemCaptureResponse.php');

namespace POGOProtos\Networking\Responses {

  use Protobuf;
  use ProtobufIO;
  use ProtobufMessage;

  // message POGOProtos.Networking.Responses.UseItemCaptureResponse
  final class UseItemCaptureResponse extends ProtobufMessage {

    private $_unknown;
    private $success = false; // optional bool success = 1
    private $itemCaptureMult = 0; // optional double item_capture_mult = 2
    private $itemFleeMult = 0; // optional double item_flee_mult = 3
    private $stopMovement = false; // optional bool stop_movement = 4
    private $stopAttack = false; // optional bool stop_attack = 5
    private $targetMax = false; // optional bool target_max = 6
    private $targetSlow = false; // optional bool target_slow = 7

    public function __construct($in = null, &$limit = PHP_INT_MAX) {
      parent::__construct($in, $limit);
    }

    public function read($fp, &$limit = PHP_INT_MAX) {
      $fp = ProtobufIO::toStream($fp, $limit);
      while(!feof($fp) && $limit > 0) {
        $tag = Protobuf::read_varint($fp, $limit);
        if ($tag === false) break;
        $wire  = $tag & 0x07;
        $field = $tag >> 3;
        switch($field) {
          case 1: // optional bool success = 1
            if($wire !== 0) {
              throw new \Exception("Incorrect wire format for field $field, expected: 0 got: $wire");
            }
            $tmp = Protobuf::read_varint($fp, $limit);
            if ($tmp === false) throw new \Exception('Protobuf::read_varint returned false');
            $this->success = ($tmp > 0) ? true : false;

            break;
          case 2: // optional double item_capture_mult = 2
            if($wire !== 1) {
              throw new \Exception("Incorrect wire format for field $field, expected: 1 got: $wire");
            }
            $tmp = Protobuf::read_double($fp, $limit);
            if ($tmp === false) throw new \Exception('Protobuf::read_double returned false');
            $this->itemCaptureMult = $tmp;

            break;
          case 3: // optional double item_flee_mult = 3
            if($wire !== 1) {
              throw new \Exception("Incorrect wire format for field $field, expected: 1 got: $wire");
            }
            $tmp = Protobuf::read_double($fp, $limit);
            if ($tmp === false) throw new \Exception('Protobuf::read_double returned false');
            $this->itemFleeMult = $tmp;

            break;
          case 4: // optional bool stop_movement = 4
            if($wire !== 0) {
              throw new \Exception("Incorrect wire format for field $field, expected: 0 got: $wire");
            }
            $tmp = Protobuf::read_varint($fp, $limit);
            if ($tmp === false) throw new \Exception('Protobuf::read_varint returned false');
            $this->stopMovement = ($tmp > 0) ? true : false;

            break;
          case 5: // optional bool stop_attack = 5
            if($wire !== 0) {
              throw new \Exception("Incorrect wire format for field $field, expected: 0 got: $wire");
            }
            $tmp = Protobuf::read_varint($fp, $limit);
            if ($tmp === false) throw new \Exception('Protobuf::read_varint returned false');
            $this->stopAttack = ($tmp > 0) ? true : false;

            break;
          case 6: // optional bool target_max = 6
            if($wire !== 0) {
              throw new \Exception("Incorrect wire format for field $field, expected: 0 got: $wire");
            }
            $tmp = Protobuf::read_varint($fp, $limit);
            if ($tmp === false) throw new \Exception('Protobuf::read_varint returned false');
            $this->targetMax = ($tmp > 0) ? true : false;

            break;
          case 7: // optional bool target_slow = 7
            if($wire !== 0) {
              throw new \Exception("Incorrect wire format for field $field, expected: 0 got: $wire");
            }
            $tmp = Protobuf::read_varint($fp, $limit);
            if ($tmp === false) throw new \Exception('Protobuf::read_varint returned false');
            $this->targetSlow = ($tmp > 0) ? true : false;

            break;
          default:
            $limit -= Protobuf::skip_field($fp, $wire);
        }
      }
    }

    public function write($fp) {
      if ($this->success !== false) {
        fwrite($fp, "\x08", 1);
        Protobuf::write_varint($fp, $this->success ? 1 : 0);
      }
      if ($this->itemCaptureMult !== 0) {
        fwrite($fp, "\x11", 1);
        Protobuf::write_double($fp, $this->itemCaptureMult);
      }
      if ($this->itemFleeMult !== 0) {
        fwrite($fp, "\x19", 1);
        Protobuf::write_double($fp, $this->itemFleeMult);
      }
      if ($this->stopMovement !== false) {
        fwrite($fp, " ", 1);
        Protobuf::write_varint($fp, $this->stopMovement ? 1 : 0);
      }
      if ($this->stopAttack !== false) {
        fwrite($fp, "(", 1);
        Protobuf::write_varint($fp, $this->stopAttack ? 1 : 0);
      }
      if ($this->targetMax !== false) {
        fwrite($fp, "0", 1);
        Protobuf::write_varint($fp, $this->targetMax ? 1 : 0);
      }
      if ($this->targetSlow !== false) {
        fwrite($fp, "8", 1);
        Protobuf::write_varint($fp, $this->targetSlow ? 1 : 0);
      }
    }

    public function size() {
      $size = 0;
      if ($this->success !== false) {
        $size += 2;
      }
      if ($this->itemCaptureMult !== 0) {
        $size += 9;
      }
      if ($this->itemFleeMult !== 0) {
        $size += 9;
      }
      if ($this->stopMovement !== false) {
        $size += 2;
      }
      if ($this->stopAttack !== false) {
        $size += 2;
      }
      if ($this->targetMax !== false) {
        $size += 2;
      }
      if ($this->targetSlow !== false) {
        $size += 2;
      }
      return $size;
    }

    public function clearSuccess() { $this->success = false; }
    public function getSuccess() { return $this->success;}
    public function setSuccess($value) { $this->success = $value; }

    public function clearItemCaptureMult() { $this->itemCaptureMult = 0; }
    public function getItemCaptureMult() { return $this->itemCaptureMult;}
    public function setItemCaptureMult($value) { $this->itemCaptureMult = $value; }

    public function clearItemFleeMult() { $this->itemFleeMult = 0; }
    public function getItemFleeMult() { return $this->itemFleeMult;}
    public function setItemFleeMult($value) { $this->itemFleeMult = $value; }

    public function clearStopMovement() { $this->stopMovement = false; }
    public function getStopMovement() { return $this->stopMovement;}
    public function setStopMovement($value) { $this->stopMovement = $value; }

    public function clearStopAttack() { $this->stopAttack = false; }
    public function getStopAttack() { return $this->stopAttack;}
    public function setStopAttack($value) { $this->stopAttack = $value; }

    public function clearTargetMax() { $this->targetMax = false; }
    public function getTargetMax() { return $this->targetMax;}
    public function setTargetMax($value) { $this->targetMax = $value; }

    public function clearTargetSlow() { $this->targetSlow = false; }
    public function getTargetSlow() { return $this->targetSlow;}
    public function setTargetSlow($value) { $this->targetSlow = $value; }

    public function __toString() {
      return ''
           . Protobuf::toString('success', $this->success, false)
           . Protobuf::toString('item_capture_mult', $this->itemCaptureMult, 0)
           . Protobuf::toString('item_flee_mult', $this->itemFleeMult, 0)
           . Protobuf::toString('stop_movement', $this->stopMovement, false)
           . Protobuf::toString('stop_attack', $this->stopAttack, false)
           . Protobuf::toString('target_max', $this->targetMax, false)
           . Protobuf::toString('target_slow', $this->targetSlow, false);
    }

    // @@protoc_insertion_point(class_scope:POGOProtos.Networking.Responses.UseItemCaptureResponse)
  }

}