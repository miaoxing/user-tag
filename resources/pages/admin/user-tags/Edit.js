import React from 'react';
import Form from "components/Form";
import CListBtn from "components/CListBtn";
import FormItem from "components/FormItem";
import FormAction from "components/FormAction";
import Field from "components/Field";
import PageHeader from "components/PageHeader";

export default class extends React.Component {
  render() {
    return <>
      <PageHeader>
        <CListBtn/>
      </PageHeader>

      <Form>
        <FormItem label="名称" name="name" required/>

        <FormItem label="顺序" name="sort" type="number"/>

        <Field type="hidden" name="id"/>

        <FormAction/>
      </Form>
    </>;
  }
}
