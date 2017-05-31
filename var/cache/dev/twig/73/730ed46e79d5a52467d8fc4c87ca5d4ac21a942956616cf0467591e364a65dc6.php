<?php

/* ::base.html.twig */
class __TwigTemplate_067a276229e98f23a9b6ccd7d27671969fcfa7034f7ad9cfbe9d678ca79b18e7 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'Head' => array($this, 'block_Head'),
            'Header' => array($this, 'block_Header'),
            'Navigation' => array($this, 'block_Navigation'),
            'Body' => array($this, 'block_Body'),
            'Footer' => array($this, 'block_Footer'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_2496916bd955c85bd98e6f1df29dc9bd99d4a9de6914f312ac0371cec8b8da75 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_2496916bd955c85bd98e6f1df29dc9bd99d4a9de6914f312ac0371cec8b8da75->enter($__internal_2496916bd955c85bd98e6f1df29dc9bd99d4a9de6914f312ac0371cec8b8da75_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "::base.html.twig"));

        $__internal_fa609e78782f2c4637e9c410e5fe0576d26fa9e2c10aafa53a02eb00e5c523c0 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_fa609e78782f2c4637e9c410e5fe0576d26fa9e2c10aafa53a02eb00e5c523c0->enter($__internal_fa609e78782f2c4637e9c410e5fe0576d26fa9e2c10aafa53a02eb00e5c523c0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "::base.html.twig"));

        // line 2
        echo "
<!DOCTYPE html>
<html>
<head>

 ";
        // line 8
        echo " ";
        $this->displayBlock('Head', $context, $blocks);
        // line 11
        echo "
</head>
<body>
  ";
        // line 15
        echo "    ";
        // line 16
        echo "    ";
        $this->displayBlock('Header', $context, $blocks);
        // line 18
        echo "
    ";
        // line 20
        echo "    ";
        $this->displayBlock('Navigation', $context, $blocks);
        // line 23
        echo "
    ";
        // line 25
        echo "    ";
        $this->displayBlock('Body', $context, $blocks);
        // line 27
        echo "
    ";
        // line 29
        echo "    ";
        $this->displayBlock('Footer', $context, $blocks);
        // line 32
        echo "  ";
        // line 33
        echo "</body>  
</html>
";
        
        $__internal_2496916bd955c85bd98e6f1df29dc9bd99d4a9de6914f312ac0371cec8b8da75->leave($__internal_2496916bd955c85bd98e6f1df29dc9bd99d4a9de6914f312ac0371cec8b8da75_prof);

        
        $__internal_fa609e78782f2c4637e9c410e5fe0576d26fa9e2c10aafa53a02eb00e5c523c0->leave($__internal_fa609e78782f2c4637e9c410e5fe0576d26fa9e2c10aafa53a02eb00e5c523c0_prof);

    }

    // line 8
    public function block_Head($context, array $blocks = array())
    {
        $__internal_e8e37f54c488bca8e3f4fd76922e38156ad281c75763e6586fa8cea6df8e0916 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e8e37f54c488bca8e3f4fd76922e38156ad281c75763e6586fa8cea6df8e0916->enter($__internal_e8e37f54c488bca8e3f4fd76922e38156ad281c75763e6586fa8cea6df8e0916_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "Head"));

        $__internal_59854273cebc36c170b6449765885f99ccc7e94f7b01d686e01508abff0729ea = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_59854273cebc36c170b6449765885f99ccc7e94f7b01d686e01508abff0729ea->enter($__internal_59854273cebc36c170b6449765885f99ccc7e94f7b01d686e01508abff0729ea_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "Head"));

        echo " 
   ";
        // line 9
        $this->loadTemplate(":backend:head.html.twig", "::base.html.twig", 9)->display($context);
        // line 10
        echo " ";
        
        $__internal_59854273cebc36c170b6449765885f99ccc7e94f7b01d686e01508abff0729ea->leave($__internal_59854273cebc36c170b6449765885f99ccc7e94f7b01d686e01508abff0729ea_prof);

        
        $__internal_e8e37f54c488bca8e3f4fd76922e38156ad281c75763e6586fa8cea6df8e0916->leave($__internal_e8e37f54c488bca8e3f4fd76922e38156ad281c75763e6586fa8cea6df8e0916_prof);

    }

    // line 16
    public function block_Header($context, array $blocks = array())
    {
        $__internal_78f439bfbf90f7c48ac592b210f8f059078bd70ca86d9c2693b8745078719fd6 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_78f439bfbf90f7c48ac592b210f8f059078bd70ca86d9c2693b8745078719fd6->enter($__internal_78f439bfbf90f7c48ac592b210f8f059078bd70ca86d9c2693b8745078719fd6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "Header"));

        $__internal_4eab48154a3a63f5ae85623f16d86f384b82063a738d09dc21d9bc5373ae12b9 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4eab48154a3a63f5ae85623f16d86f384b82063a738d09dc21d9bc5373ae12b9->enter($__internal_4eab48154a3a63f5ae85623f16d86f384b82063a738d09dc21d9bc5373ae12b9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "Header"));

        echo " 
    ";
        
        $__internal_4eab48154a3a63f5ae85623f16d86f384b82063a738d09dc21d9bc5373ae12b9->leave($__internal_4eab48154a3a63f5ae85623f16d86f384b82063a738d09dc21d9bc5373ae12b9_prof);

        
        $__internal_78f439bfbf90f7c48ac592b210f8f059078bd70ca86d9c2693b8745078719fd6->leave($__internal_78f439bfbf90f7c48ac592b210f8f059078bd70ca86d9c2693b8745078719fd6_prof);

    }

    // line 20
    public function block_Navigation($context, array $blocks = array())
    {
        $__internal_45a2803c01d11d46cecfe53e2ba77ada7d44585656abbfe888633162a1a7dd60 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_45a2803c01d11d46cecfe53e2ba77ada7d44585656abbfe888633162a1a7dd60->enter($__internal_45a2803c01d11d46cecfe53e2ba77ada7d44585656abbfe888633162a1a7dd60_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "Navigation"));

        $__internal_2f5d77b920cf8a2ad1d01fe368e87fd350a36b6ffe60a6352946c6b42c704b47 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2f5d77b920cf8a2ad1d01fe368e87fd350a36b6ffe60a6352946c6b42c704b47->enter($__internal_2f5d77b920cf8a2ad1d01fe368e87fd350a36b6ffe60a6352946c6b42c704b47_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "Navigation"));

        echo " 
      ";
        // line 21
        $this->loadTemplate(":backend:navigation.html.twig", "::base.html.twig", 21)->display($context);
        echo "   
    ";
        
        $__internal_2f5d77b920cf8a2ad1d01fe368e87fd350a36b6ffe60a6352946c6b42c704b47->leave($__internal_2f5d77b920cf8a2ad1d01fe368e87fd350a36b6ffe60a6352946c6b42c704b47_prof);

        
        $__internal_45a2803c01d11d46cecfe53e2ba77ada7d44585656abbfe888633162a1a7dd60->leave($__internal_45a2803c01d11d46cecfe53e2ba77ada7d44585656abbfe888633162a1a7dd60_prof);

    }

    // line 25
    public function block_Body($context, array $blocks = array())
    {
        $__internal_729a55164021c3466095b5122f0a072ef8b0f3e02ae33628bf5b9a93e8613487 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_729a55164021c3466095b5122f0a072ef8b0f3e02ae33628bf5b9a93e8613487->enter($__internal_729a55164021c3466095b5122f0a072ef8b0f3e02ae33628bf5b9a93e8613487_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "Body"));

        $__internal_094be6c563b36ae942d49c20540a9a130204468c0ff0d90410af15d45eaa317d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_094be6c563b36ae942d49c20540a9a130204468c0ff0d90410af15d45eaa317d->enter($__internal_094be6c563b36ae942d49c20540a9a130204468c0ff0d90410af15d45eaa317d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "Body"));

        echo " 
    ";
        
        $__internal_094be6c563b36ae942d49c20540a9a130204468c0ff0d90410af15d45eaa317d->leave($__internal_094be6c563b36ae942d49c20540a9a130204468c0ff0d90410af15d45eaa317d_prof);

        
        $__internal_729a55164021c3466095b5122f0a072ef8b0f3e02ae33628bf5b9a93e8613487->leave($__internal_729a55164021c3466095b5122f0a072ef8b0f3e02ae33628bf5b9a93e8613487_prof);

    }

    // line 29
    public function block_Footer($context, array $blocks = array())
    {
        $__internal_32316fa8a86946e9056ba2821dd28314882b7cd4d3cdd50f23916177019e96d7 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_32316fa8a86946e9056ba2821dd28314882b7cd4d3cdd50f23916177019e96d7->enter($__internal_32316fa8a86946e9056ba2821dd28314882b7cd4d3cdd50f23916177019e96d7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "Footer"));

        $__internal_8f9fe3e144febe55fe34b8606953286c306710224da35631de8c051c62b6bd5a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8f9fe3e144febe55fe34b8606953286c306710224da35631de8c051c62b6bd5a->enter($__internal_8f9fe3e144febe55fe34b8606953286c306710224da35631de8c051c62b6bd5a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "Footer"));

        echo " 
      ";
        // line 30
        $this->loadTemplate(":backend:footer.html.twig", "::base.html.twig", 30)->display($context);
        echo " 
    ";
        
        $__internal_8f9fe3e144febe55fe34b8606953286c306710224da35631de8c051c62b6bd5a->leave($__internal_8f9fe3e144febe55fe34b8606953286c306710224da35631de8c051c62b6bd5a_prof);

        
        $__internal_32316fa8a86946e9056ba2821dd28314882b7cd4d3cdd50f23916177019e96d7->leave($__internal_32316fa8a86946e9056ba2821dd28314882b7cd4d3cdd50f23916177019e96d7_prof);

    }

    public function getTemplateName()
    {
        return "::base.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  177 => 30,  166 => 29,  147 => 25,  135 => 21,  124 => 20,  105 => 16,  95 => 10,  93 => 9,  82 => 8,  70 => 33,  68 => 32,  65 => 29,  62 => 27,  59 => 25,  56 => 23,  53 => 20,  50 => 18,  47 => 16,  45 => 15,  40 => 11,  37 => 8,  30 => 2,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{# app/Resources/views/layoutdudeego.html.twig #}

<!DOCTYPE html>
<html>
<head>

 {# Contenu de la balise head #}
 {% block Head %} 
   {% include ':backend:head.html.twig' %}
 {% endblock %}

</head>
<body>
  {#{% if is_granted(\"IS_AUTHENTICATED_REMEMBERED\") %}#}
    {# Contenu de l'en-tete #}
    {% block Header %} 
    {% endblock %}

    {# Contenu de la balise nav #}
    {% block Navigation %} 
      {% include ':backend:navigation.html.twig' %}   
    {% endblock %}

    {# Contenu du corps de page #}
    {% block Body %} 
    {% endblock %}

    {# Contenu du pied de page #}
    {% block Footer %} 
      {% include ':backend:footer.html.twig' %} 
    {% endblock %}
  {#{% endif %}#}
</body>  
</html>
", "::base.html.twig", "C:\\wamp64\\www\\Projet\\Espace abonne\\esf\\app\\Resources\\views\\base.html.twig");
    }
}
