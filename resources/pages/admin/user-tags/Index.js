import React from "react";
import app from 'app';
import {Button} from "react-bootstrap";
import Table from "components/Table";
import CNewBtn from "components/CNewBtn";
import Actions from "components/Actions";
import CEditLink from "components/CEditLink";
import CDeleteLink from "components/CDeleteLink";
import TableProvider from "components/TableProvider";
import PageHeader from "components/PageHeader";
import SearchForm from "components/SearchForm";
import SearchItem from "components/SearchItem";

const ModalLink = window.ModalLink;

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
    return <>
      <PageHeader>
        <Actions>
          <Button variant="secondary" onClick={this.sync}>同步微信标签</Button>
          <CNewBtn/>
        </Actions>
      </PageHeader>

      <TableProvider>
        <SearchForm>
          <SearchItem label="名称" name="name$ct"/>
        </SearchForm>

        <Table
          url={app.curIndexUrl()}
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
                <ModalLink to={app.curEditUrl(id)}>编辑</ModalLink>
                <CDeleteLink id={id}/>
              </Actions>
            },
          ]}
        />
      </TableProvider>
    </>;
  }
}
