import { Component, OnInit } from '@angular/core';
import {MessageTM} from '../../models/message-tm';
import {Video} from '../../models/video';

@Component({
  selector: 'app-purchase',
  templateUrl: './purchase.component.html',
  styleUrls: ['./purchase.component.css']
})
export class PurchaseComponent implements OnInit {
  errors: MessageTM[];
  videos: Video[];
  constructor() { }

  ngOnInit() {
  }

}
