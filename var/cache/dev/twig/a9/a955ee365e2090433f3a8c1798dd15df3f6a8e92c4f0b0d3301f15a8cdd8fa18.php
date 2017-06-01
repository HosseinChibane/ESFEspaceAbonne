<?php

/* ESFEspaceAbonneBundle:back:universiteThree.html.twig */
class __TwigTemplate_b16645b58e382eb638c93e1dd75d01c8dfba3e0bf757cdfc0668299535be8f37 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate(":backend:sidebar.html.twig", "ESFEspaceAbonneBundle:back:universiteThree.html.twig", 1);
        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'Content' => array($this, 'block_Content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return ":backend:sidebar.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_67d51e924405d1cdc70086eca133c80f1bd4ba01900e4a2ea9efaa57e9da322d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_67d51e924405d1cdc70086eca133c80f1bd4ba01900e4a2ea9efaa57e9da322d->enter($__internal_67d51e924405d1cdc70086eca133c80f1bd4ba01900e4a2ea9efaa57e9da322d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "ESFEspaceAbonneBundle:back:universiteThree.html.twig"));

        $__internal_f1fcf3887b6aa78a805799344fb51fdf6d81c5ae1c608a636f11bedb0f8a9246 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f1fcf3887b6aa78a805799344fb51fdf6d81c5ae1c608a636f11bedb0f8a9246->enter($__internal_f1fcf3887b6aa78a805799344fb51fdf6d81c5ae1c608a636f11bedb0f8a9246_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "ESFEspaceAbonneBundle:back:universiteThree.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_67d51e924405d1cdc70086eca133c80f1bd4ba01900e4a2ea9efaa57e9da322d->leave($__internal_67d51e924405d1cdc70086eca133c80f1bd4ba01900e4a2ea9efaa57e9da322d_prof);

        
        $__internal_f1fcf3887b6aa78a805799344fb51fdf6d81c5ae1c608a636f11bedb0f8a9246->leave($__internal_f1fcf3887b6aa78a805799344fb51fdf6d81c5ae1c608a636f11bedb0f8a9246_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_bb1aa11f3853f5ed44ac80558ead8b58ac6b1a7094f72c25f2cd3e677094e39e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_bb1aa11f3853f5ed44ac80558ead8b58ac6b1a7094f72c25f2cd3e677094e39e->enter($__internal_bb1aa11f3853f5ed44ac80558ead8b58ac6b1a7094f72c25f2cd3e677094e39e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_10329d7cc7ef1f10a13fd5d851150751a385c28f76f3904bdf970831d271abe8 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_10329d7cc7ef1f10a13fd5d851150751a385c28f76f3904bdf970831d271abe8->enter($__internal_10329d7cc7ef1f10a13fd5d851150751a385c28f76f3904bdf970831d271abe8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 4
        echo "  Inscription Université - ";
        $this->displayParentBlock("title", $context, $blocks);
        echo "
";
        
        $__internal_10329d7cc7ef1f10a13fd5d851150751a385c28f76f3904bdf970831d271abe8->leave($__internal_10329d7cc7ef1f10a13fd5d851150751a385c28f76f3904bdf970831d271abe8_prof);

        
        $__internal_bb1aa11f3853f5ed44ac80558ead8b58ac6b1a7094f72c25f2cd3e677094e39e->leave($__internal_bb1aa11f3853f5ed44ac80558ead8b58ac6b1a7094f72c25f2cd3e677094e39e_prof);

    }

    // line 7
    public function block_Content($context, array $blocks = array())
    {
        $__internal_5d70944a764bf5b4c9b6e8dfc7c733f733abde683af2f7c6577812266c45a28d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_5d70944a764bf5b4c9b6e8dfc7c733f733abde683af2f7c6577812266c45a28d->enter($__internal_5d70944a764bf5b4c9b6e8dfc7c733f733abde683af2f7c6577812266c45a28d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "Content"));

        $__internal_d627dd60b63752304b5d85f1ee7de018c065fb5016647175d04444f6eb5a542f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d627dd60b63752304b5d85f1ee7de018c065fb5016647175d04444f6eb5a542f->enter($__internal_d627dd60b63752304b5d85f1ee7de018c065fb5016647175d04444f6eb5a542f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "Content"));

        echo " 
  <div class=\"row\">
    <div class=\"col-md-12\">
      <h2>Etape 3</h2>
      <p>Veuillez joindre le(s) PDF precedent afin de valider votre demande pour que nous puissions la prendre en compte.</p>         
      
      ";
        // line 13
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock(($context["form"] ?? $this->getContext($context, "form")), 'form_start');
        echo "

      ";
        // line 15
        if ( !$this->getAttribute($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "vars", array()), "valid", array())) {
            // line 16
            echo "        <div class=\"alert alert-error\">
          ";
            // line 17
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock(($context["form"] ?? $this->getContext($context, "form")), 'errors');
            echo "
        </div>
      ";
        }
        // line 20
        echo "
      <div class=\"form-group\">
        ";
        // line 22
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "documentinscription", array()), "nom", array()), 'label', array("label" => "Document d'Inscription"));
        echo "
        ";
        // line 23
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "documentinscription", array()), "nom", array()), 'widget');
        echo "
      </div>

      <div class=\"row\">
        <div class=\"col-md-12\">
          <div class=\"form-group\">
            ";
        // line 29
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "documentinscription", array()), "pdfFile", array()), 'widget');
        echo "
          </div>
        </div>
      </div>

      <div class=\"row\">
        <div class=\"col-md-12\">
          <div class=\"form-group\">
           <a class=\"btn btn-danger\" href=\"";
        // line 37
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("esf_espace_abonne_universiteStepsOne");
        echo "\">Retour à l'étape 1</a>
           ";
        // line 38
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "documentinscription", array()), "Enregistrer", array()), 'widget');
        echo "
         </div>
       </div>
     </div>

     ";
        // line 44
        echo "     ";
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "_token", array()), 'widget');
        echo "

     ";
        // line 46
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock(($context["form"] ?? $this->getContext($context, "form")), 'form_end', array("render_rest" => false));
        echo "
   </div>
 </div>


";
        
        $__internal_d627dd60b63752304b5d85f1ee7de018c065fb5016647175d04444f6eb5a542f->leave($__internal_d627dd60b63752304b5d85f1ee7de018c065fb5016647175d04444f6eb5a542f_prof);

        
        $__internal_5d70944a764bf5b4c9b6e8dfc7c733f733abde683af2f7c6577812266c45a28d->leave($__internal_5d70944a764bf5b4c9b6e8dfc7c733f733abde683af2f7c6577812266c45a28d_prof);

    }

    public function getTemplateName()
    {
        return "ESFEspaceAbonneBundle:back:universiteThree.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  141 => 46,  135 => 44,  127 => 38,  123 => 37,  112 => 29,  103 => 23,  99 => 22,  95 => 20,  89 => 17,  86 => 16,  84 => 15,  79 => 13,  63 => 7,  50 => 4,  41 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends \":backend:sidebar.html.twig\" %}

{% block title %}
  Inscription Université - {{ parent() }}
{% endblock %}

{% block Content %} 
  <div class=\"row\">
    <div class=\"col-md-12\">
      <h2>Etape 3</h2>
      <p>Veuillez joindre le(s) PDF precedent afin de valider votre demande pour que nous puissions la prendre en compte.</p>         
      
      {{ form_start(form) }}

      {% if not form.vars.valid %}
        <div class=\"alert alert-error\">
          {{ form_errors(form) }}
        </div>
      {% endif %}

      <div class=\"form-group\">
        {{ form_label(form.documentinscription.nom, 'Document d\\'Inscription') }}
        {{ form_widget(form.documentinscription.nom) }}
      </div>

      <div class=\"row\">
        <div class=\"col-md-12\">
          <div class=\"form-group\">
            {{ form_widget(form.documentinscription.pdfFile) }}
          </div>
        </div>
      </div>

      <div class=\"row\">
        <div class=\"col-md-12\">
          <div class=\"form-group\">
           <a class=\"btn btn-danger\" href=\"{{ path('esf_espace_abonne_universiteStepsOne') }}\">Retour à l'étape 1</a>
           {{ form_widget(form.documentinscription.Enregistrer) }}
         </div>
       </div>
     </div>

     {# Token CSRF #}
     {{ form_widget(form._token) }}

     {{ form_end(form, {'render_rest': false }) }}
   </div>
 </div>


{% endblock %}
", "ESFEspaceAbonneBundle:back:universiteThree.html.twig", "C:\\wamp64\\www\\Projet\\Espace abonne\\esf\\src\\ESF\\EspaceAbonneBundle/Resources/views/back/universiteThree.html.twig");
    }
}
