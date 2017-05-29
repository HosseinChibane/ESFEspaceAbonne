<?php

/* FOSUserBundle:Group:show.html.twig */
class __TwigTemplate_fc0c79a683535526839a76107cf454b6a778ffcbd7864afd6df50a9519c687c4 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@FOSUser/layout.html.twig", "FOSUserBundle:Group:show.html.twig", 1);
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
        $__internal_e06ef9c5c9c698f56c3ddc860aa75d324eefa1e046ad45894bb14544b3f9aaf4 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e06ef9c5c9c698f56c3ddc860aa75d324eefa1e046ad45894bb14544b3f9aaf4->enter($__internal_e06ef9c5c9c698f56c3ddc860aa75d324eefa1e046ad45894bb14544b3f9aaf4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Group:show.html.twig"));

        $__internal_dc36bfc33a6cac468d397db5e27e2b40ff312e31c914232b4f04dc5aa4b35f28 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_dc36bfc33a6cac468d397db5e27e2b40ff312e31c914232b4f04dc5aa4b35f28->enter($__internal_dc36bfc33a6cac468d397db5e27e2b40ff312e31c914232b4f04dc5aa4b35f28_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Group:show.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_e06ef9c5c9c698f56c3ddc860aa75d324eefa1e046ad45894bb14544b3f9aaf4->leave($__internal_e06ef9c5c9c698f56c3ddc860aa75d324eefa1e046ad45894bb14544b3f9aaf4_prof);

        
        $__internal_dc36bfc33a6cac468d397db5e27e2b40ff312e31c914232b4f04dc5aa4b35f28->leave($__internal_dc36bfc33a6cac468d397db5e27e2b40ff312e31c914232b4f04dc5aa4b35f28_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_b811cb7d47b8920e8ca0c674676bc668086c37d2183cfee127006c657a58520b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b811cb7d47b8920e8ca0c674676bc668086c37d2183cfee127006c657a58520b->enter($__internal_b811cb7d47b8920e8ca0c674676bc668086c37d2183cfee127006c657a58520b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        $__internal_476e684cbf379f44c6b7c9e6466a6ac6892a657e66d5704e4b0998514ed82f76 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_476e684cbf379f44c6b7c9e6466a6ac6892a657e66d5704e4b0998514ed82f76->enter($__internal_476e684cbf379f44c6b7c9e6466a6ac6892a657e66d5704e4b0998514ed82f76_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("@FOSUser/Group/show_content.html.twig", "FOSUserBundle:Group:show.html.twig", 4)->display($context);
        
        $__internal_476e684cbf379f44c6b7c9e6466a6ac6892a657e66d5704e4b0998514ed82f76->leave($__internal_476e684cbf379f44c6b7c9e6466a6ac6892a657e66d5704e4b0998514ed82f76_prof);

        
        $__internal_b811cb7d47b8920e8ca0c674676bc668086c37d2183cfee127006c657a58520b->leave($__internal_b811cb7d47b8920e8ca0c674676bc668086c37d2183cfee127006c657a58520b_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Group:show.html.twig";
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
{% include \"@FOSUser/Group/show_content.html.twig\" %}
{% endblock fos_user_content %}
", "FOSUserBundle:Group:show.html.twig", "C:\\wamp64\\www\\Projet\\Espace abonne\\esf\\app/Resources/FOSUserBundle/views/Group/show.html.twig");
    }
}
