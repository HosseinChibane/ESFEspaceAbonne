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
        $__internal_fa1b4ecb44d5d81bb1d286417839c07f0e18879e86c81ffae8f3da879bcb34c8 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_fa1b4ecb44d5d81bb1d286417839c07f0e18879e86c81ffae8f3da879bcb34c8->enter($__internal_fa1b4ecb44d5d81bb1d286417839c07f0e18879e86c81ffae8f3da879bcb34c8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "ESFEspaceAbonneBundle:back:universiteThree.html.twig"));

        $__internal_706160dec8e291c39a8768772452aa4f3784e972e82594b31666522dd80f7a5c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_706160dec8e291c39a8768772452aa4f3784e972e82594b31666522dd80f7a5c->enter($__internal_706160dec8e291c39a8768772452aa4f3784e972e82594b31666522dd80f7a5c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "ESFEspaceAbonneBundle:back:universiteThree.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_fa1b4ecb44d5d81bb1d286417839c07f0e18879e86c81ffae8f3da879bcb34c8->leave($__internal_fa1b4ecb44d5d81bb1d286417839c07f0e18879e86c81ffae8f3da879bcb34c8_prof);

        
        $__internal_706160dec8e291c39a8768772452aa4f3784e972e82594b31666522dd80f7a5c->leave($__internal_706160dec8e291c39a8768772452aa4f3784e972e82594b31666522dd80f7a5c_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_a740a71b0d35d1d3407e5a5458d74b1458f40529e5abc2d7d2ebf5bbf871299f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a740a71b0d35d1d3407e5a5458d74b1458f40529e5abc2d7d2ebf5bbf871299f->enter($__internal_a740a71b0d35d1d3407e5a5458d74b1458f40529e5abc2d7d2ebf5bbf871299f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_30d4df28e75b47696460cb8f08c616ef3c578d5976c93e4a6870502f43e8fc64 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_30d4df28e75b47696460cb8f08c616ef3c578d5976c93e4a6870502f43e8fc64->enter($__internal_30d4df28e75b47696460cb8f08c616ef3c578d5976c93e4a6870502f43e8fc64_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 4
        echo "  Inscription Université - ";
        $this->displayParentBlock("title", $context, $blocks);
        echo "
";
        
        $__internal_30d4df28e75b47696460cb8f08c616ef3c578d5976c93e4a6870502f43e8fc64->leave($__internal_30d4df28e75b47696460cb8f08c616ef3c578d5976c93e4a6870502f43e8fc64_prof);

        
        $__internal_a740a71b0d35d1d3407e5a5458d74b1458f40529e5abc2d7d2ebf5bbf871299f->leave($__internal_a740a71b0d35d1d3407e5a5458d74b1458f40529e5abc2d7d2ebf5bbf871299f_prof);

    }

    // line 7
    public function block_Content($context, array $blocks = array())
    {
        $__internal_58573531123bc05f37bb36e1de725baba3d07205b28aaa632b3a005426023b9d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_58573531123bc05f37bb36e1de725baba3d07205b28aaa632b3a005426023b9d->enter($__internal_58573531123bc05f37bb36e1de725baba3d07205b28aaa632b3a005426023b9d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "Content"));

        $__internal_13b4a2dd8a0f822ffb52681abf3158ac24cdb875ebd7fcc250659162d2514443 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_13b4a2dd8a0f822ffb52681abf3158ac24cdb875ebd7fcc250659162d2514443->enter($__internal_13b4a2dd8a0f822ffb52681abf3158ac24cdb875ebd7fcc250659162d2514443_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "Content"));

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
        
        $__internal_13b4a2dd8a0f822ffb52681abf3158ac24cdb875ebd7fcc250659162d2514443->leave($__internal_13b4a2dd8a0f822ffb52681abf3158ac24cdb875ebd7fcc250659162d2514443_prof);

        
        $__internal_58573531123bc05f37bb36e1de725baba3d07205b28aaa632b3a005426023b9d->leave($__internal_58573531123bc05f37bb36e1de725baba3d07205b28aaa632b3a005426023b9d_prof);

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
