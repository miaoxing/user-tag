import React from "react";
import app from 'app';
import {Button, PageHeader} from "react-bootstrap";
import Table from "components/Table";
import CNewBtn from "components/CNewBtn";
import Actions from "components/Actions";
import CEditLink from "components/CEditLink";
import CDeleteLink from "components/CDeleteLink";
import {withTable} from "components/TableProvider";

@withTable
export default class extends React.Component {
  sync = () => {
    app.get(app.url('admin/wechat-tags/sync-from-wechat'))
      .then(ret => {
        if (ret.code === 1) {
          $.alert(ret.message, () => {
            this.props.table.reload();
          });
        } else {
          $.msg(ret);
        }
      });
  };

  render() {
    return <React.Fragment>
      <PageHeader>
        <div className="pull-right">
          <Actions>
            <Button onClick={this.sync}>同步微信标签</Button>
            <CNewBtn/>
          </Actions>
        </div>
        {wei.page.controllerTitle}
      </PageHeader>

      <Table
        columns={[
          {
            text: '名称',
            dataField: 'name',
          },
          {
            text: '顺序',
            dataField: 'sort'
          },
          {
            text: '操作',
            formatter: (cell, {id}) => <Actions>
              <CEditLink id={id}/>
              <CDeleteLink id={id}/>
            </Actions>
          },
        ]}
      />
    </React.Fragment>;
  }
}
