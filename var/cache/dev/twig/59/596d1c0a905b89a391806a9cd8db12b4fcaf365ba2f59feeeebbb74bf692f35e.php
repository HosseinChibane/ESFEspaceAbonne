<?php

/* FOSUserBundle:Group:edit.html.twig */
class __TwigTemplate_10211c20825dbe7fc481b4965a9ce9b0d05759fa80bb1acd158f708b85643074 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@FOSUser/layout.html.twig", "FOSUserBundle:Group:edit.html.twig", 1);
        $this->blocks = array(
            'fos_user_content' => array($this, 'block_fos_user_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@FOSUser/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_11cba2458bda00c12148215a04c2c2bfafa1eebe2368f0f3ee182814086ec357 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_11cba2458bda00c12148215a04c2c2bfafa1eebe2368f0f3ee182814086ec357->enter($__internal_11cba2458bda00c12148215a04c2c2bfafa1eebe2368f0f3ee182814086ec357_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Group:edit.html.twig"));

        $__internal_54b444ed8a7b1504b8721a867134215ecd0c83b21c78892b9b8690a3333ee6aa = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_54b444ed8a7b1504b8721a867134215ecd0c83b21c78892b9b8690a3333ee6aa->enter($__internal_54b444ed8a7b1504b8721a867134215ecd0c83b21c78892b9b8690a3333ee6aa_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Group:edit.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_11cba2458bda00c12148215a04c2c2bfafa1eebe2368f0f3ee182814086ec357->leave($__internal_11cba2458bda00c12148215a04c2c2bfafa1eebe2368f0f3ee182814086ec357_prof);

        
        $__internal_54b444ed8a7b1504b8721a867134215ecd0c83b21c78892b9b8690a3333ee6aa->leave($__internal_54b444ed8a7b1504b8721a867134215ecd0c83b21c78892b9b8690a3333ee6aa_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_6c97c7cf13cfa00cc170a14df63ffbbfe4fe6448aec9b1db8d12d95342a97a47 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_6c97c7cf13cfa00cc170a14df63ffbbfe4fe6448aec9b1db8d12d95342a97a47->enter($__internal_6c97c7cf13cfa00cc170a14df63ffbbfe4fe6448aec9b1db8d12d95342a97a47_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        $__internal_97ecbb58ff95e5b5111a0be2331f9a5e2f7753eed938702736e9b532283e675e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_97ecbb58ff95e5b5111a0be2331f9a5e2f7753eed938702736e9b532283e675e->enter($__internal_97ecbb58ff95e5b5111a0be2331f9a5e2f7753eed938702736e9b532283e675e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("@FOSUser/Group/edit_content.html.twig", "FOSUserBundle:Group:edit.html.twig", 4)->display($context);
        
        $__internal_97ecbb58ff95e5b5111a0be2331f9a5e2f7753eed938702736e9b532283e675e->leave($__internal_97ecbb58ff95e5b5111a0be2331f9a5e2f7753eed938702736e9b532283e675e_prof);

        
        $__internal_6c97c7cf13cfa00cc170a14df63ffbbfe4fe6448aec9b1db8d12d95342a97a47->leave($__internal_6c97c7cf13cfa00cc170a14df63ffbbfe4fe6448aec9b1db8d12d95342a97a47_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Group:edit.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  49 => 4,  40 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends \"@FOSUser/layout.html.twig\" %}

{% block fos_user_content %}
{% include \"@FOSUser/Group/edit_content.html.twig\" %}
{% endblock fos_user_content %}
", "FOSUserBundle:Group:edit.html.twig", "C:\\wamp64\\www\\Projet\\Espace abonne\\esf\\app/Resources/FOSUserBundle/views/Group/edit.html.twig");
    }
}
