import React from "react";
import {PageHeader} from "react-bootstrap";
import Table from "components/Table";
import CNewBtn from "components/CNewBtn";
import Actions from "components/Actions";
import CEditLink from "components/CEditLink";
import CDeleteLink from "components/CDeleteLink";

export default class extends React.Component {
  render() {
    return <React.Fragment>
      <PageHeader>
        <div className="pull-right">
          <CNewBtn/>
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
